<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see https://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    public function buildMac()
    {
        $this->_exec("cd FlowDeerTree && yarn tauri build -t universal-apple-darwin");
    }

    public function dev()
    {
        $this->_exec("cd FlowDeerTree && yarn tauri dev");    
    }
}