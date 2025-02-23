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

    public function copySite()
    {
        // 删掉FlowDeerTreeElectron/src/site 然后从 docs 复制
        $this->_exec("rm -rf FlowDeerTreeElectron/src/site && cp -r docs FlowDeerTreeElectron/src/site");
    }
}