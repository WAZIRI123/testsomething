namespace App\Http\Livewire\Menu;

use App\Events\Menu\SettingsCreated;
use App\Models\Module\Module;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

class Settings extends Component
{
    public $user = null;

    public $keyword = '';

    public $settings = [];

    public $active_menu = 0;

    protected $listeners = ['resetKeyword'];

    public function render(): View
    {
        $this->user = user(); // Set the current user

        menu()->create('settings', function ($menu) {
            $menu->style('tailwind'); // Set the menu style

            event(new SettingsCreated($menu)); // Trigger the SettingsCreated event

            $this->addSettingsOfModulesFromJsonFile($menu); // Add settings for modules from a JSON file

            foreach($menu->getItems() as $item) {
                if ($item->isActive()) {
                    $this->active_menu = 1; // Set the active menu flag if the item is active
                }

                if ($this->availableInSearch($item)) {
                    $this->settings[] = $item; // Add the item to the settings array if it matches the search

                    continue;
                }

                $menu->removeByTitle($item->title); // Remove the item from the menu if it doesn't match the search
            }
        });

        return view('livewire.menu.settings'); // Render the settings view
    }

    public function addSettingsOfModulesFromJsonFile($menu): void
    {
        // Get enabled modules
        $enabled_modules = Module::enabled()->get();

        $order = 110; // Set the initial order value

        foreach ($enabled_modules as $module) {
            $m = module($module->alias); // Get the module instance

            // Check if the module exists and has settings
            if (!$m || empty($m->get('settings'))) {
                continue; // Skip to the next module if it doesn't have settings
            }

            if ($this->user->cannot('read-' . $m->getAlias() . '-settings')) {
                continue; // Skip to the next module if the user doesn't have permission to read its settings
            }

            $menu->route('settings.module.edit', $m->getName(), ['alias' => $m->getAlias()], $m->get('setting_order', $order), [
                'icon' => $m->get('icon', 'custom-akaunting'),
                'search_keywords' => $m->getDescription(),
            ]); // Add the module's settings route to the menu with specified attributes

            $order += 10; // Increment the order value for the next module
        }
    }

    public function availableInSearch($item): bool
    {
        if (empty($this->keyword)) {
            return true; // Return true if the keyword is empty (no search filter applied)
        }

        return $this->search($item); // Perform search filtering
    }

    public function search($item): bool
    {
        $status = false; // Set the initial status to false

        $keywords = explode(' ', $this->keyword); // Split the keyword into an array of individual keywords

        foreach ($keywords as $keyword) {
            if (Str::contains(Str::lower($item->title), Str::lower($keyword))) {
                $status = true; // Set the status to true if the item's title contains the keyword

                break;
            }

            if (
                !empty($item->attributes['search_keywords'])
                && Str::contains(Str::lower($item->attributes['search_keywords']), Str::lower($keyword))
            ) {
                $status = true; // Set the status to true if the item's search keywords attribute contains the keyword

                break;
            }
        }

        return $status; // Return the final status
    }

    public function resetKeyword(): void
    {
        $this->keyword = ''; // Reset the keyword to an empty string
    }
}
