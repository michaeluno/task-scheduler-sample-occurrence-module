<?php
/**
 *	Plugin Name:    Task Scheduler - Sample Occurrence Module
 *	Plugin URI:     http://en.michaeluno.jp/
 *	Description:    Demonstrates a sample occurrence module.
 *	Author:         Michael Uno
 *	Author URI:     http://michaeluno.jp
 *	Version:        1.0.0
 */

/**
 * Called when the Task Scheduler plugin gets loaded.
 */
function loadTaskSchedulerSampleOccurrenceModule() {
    
    // Register a custom occurrence module.
    include( dirname( __FILE__ ) . '/module/TaskScheduler_SampleOccurrenceModule.php' );
    new TaskScheduler_SampleOccurrenceModule;
    
}
add_action( 'task_scheduler_action_after_loading_plugin', 'loadTaskSchedulerSampleOccurrenceModule' );