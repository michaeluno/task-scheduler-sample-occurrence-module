<?php
/**
 * Demonstrates a sample occurrence module of Task Scheduler.
 * 
 * @package     Task Scheduler - Sample Occurrence Module
 * @copyright   Copyright (c) 2015, Michael Uno
 * @author      Michael Uno
 * @authorurl   http://michaeluno.jp
 * @since       1.0.0
 */

/**
 * 
 */
class TaskScheduler_SampleOccurrenceModule extends TaskScheduler_Occurrence_Base {
        
    /**
     * The user constructor.
     * 
     * This method is automatically called at the end of the class constructor.
     */
    public function construct() {
        
        // Debug 
        // TaskScheduler_Debug::log(  get_object_vars( $this ) );
        
    }

    /**
     * Returns the readable label of this action.
     * 
     * This will be called when displaying the action in an pull-down select option, task listing table, or notification email message.
     */
    public function getLabel( $sLabel ) {         
        return __( 'Sample Occurrence Module', 'task-scheduler-sample-occurrence-module' );
    }
    
    /**
     * Returns the description of the module.
     */
    public function getDescription( $sDescription ) {
        return __( 'This is a sample occurrence module. Gives a 2 minute fixed interval.', 'task-scheduler-sample-occurrence-module' );
    }    
    
    /**
     * Called after the routine action is triggered.
     */
    public function doAfterAction( $oRoutine, $isExitCode ) {}

    /**
     * Returns the next run time time-stamp.
     * 
     * @return      integer     The next run time timestamp.
     */ 
    public function getNextRunTime( $iTimestamp, $oRoutine ) {
        // give at least 3 seconds of interval
        return microtime( true ) + 120;    
    }  
    
}