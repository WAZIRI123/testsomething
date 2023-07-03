<template>
    <!-- Container for displaying notifications -->
    <div class="notifications">
        <!-- Transition component for sliding notifications vertically -->
        <slide-y-up-transition :duration="transitionDuration"
            group
            mode="out-in"
        >
            <!-- Iterating over notifications and binding their properties -->
            <notification
                v-for="notification in notifications"
                v-bind="notification"
                :clickHandler="notification.onClick"
                :key="notification.timestamp.getTime()"
                @close="removeNotification"
            >
            </notification>
        </slide-y-up-transition>
    </div>
</template>
<script>
    import Notification from './Notification.vue'; // Importing the Notification component
    import { SlideYUpTransition } from 'vue2-transitions'; // Importing the SlideYUpTransition component

    export default {
        components: {
            SlideYUpTransition, // Using the SlideYUpTransition component
            Notification // Using the Notification component
        },

        props: {
            transitionDuration: {
                type: Number,
                default: 200 // The duration of the transition in milliseconds
            },

            overlap: {
                type: Boolean,
                default: false // Determines if notifications should overlap or not
            }
        },

        data() {
            return {
                notifications: this.$notifications.state // An array of notifications to display
            };
        },

        methods: {
            removeNotification(timestamp) {
                this.$notifications.removeNotification(timestamp);
                // Method for removing a notification when it is closed
            }
        },

        created() {
            this.$notifications.settings.overlap = this.overlap;
            // Setting the overlap value in the notification settings when the component is created
        },

        watch: {
            overlap: function (newVal) {
                this.$notifications.settings.overlap = newVal;
                // Updating the overlap value in the notification settings when it changes
            }
        }
    };
</script>
