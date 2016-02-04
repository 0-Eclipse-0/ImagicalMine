<?php

/*
 *
 *  _                       _           _ __  __ _             
 * (_)                     (_)         | |  \/  (_)            
 *  _ _ __ ___   __ _  __ _ _  ___ __ _| | \  / |_ _ __   ___  
 * | | '_ ` _ \ / _` |/ _` | |/ __/ _` | | |\/| | | '_ \ / _ \ 
 * | | | | | | | (_| | (_| | | (_| (_| | | |  | | | | | |  __/ 
 * |_|_| |_| |_|\__,_|\__, |_|\___\__,_|_|_|  |_|_|_| |_|\___| 
 *                     __/ |                                   
 *                    |___/                                                                     
 * 
 * This program is a third party build by ImagicalMine.
 * 
 * PocketMine is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author ImagicalMine Team
 * @link http://forums.imagicalcorp.ml/
 * 
 *
*/

namespace pocketmine\scheduler;

abstract class Task
{

    /** @var TaskHandler */
    private $taskHandler = null;

    /**
     * @return TaskHandler
     */
    final public function getHandler()
    {
        return $this->taskHandler;
    }

    /**
     * @return int
     */
    final public function getTaskId()
    {
        if ($this->taskHandler !== null) {
            return $this->taskHandler->getTaskId();
        }

        return -1;
    }

    /**
     * @param TaskHandler $taskHandler
     */
    final public function setHandler($taskHandler)
    {
        if ($this->taskHandler === null or $taskHandler === null) {
            $this->taskHandler = $taskHandler;
        }
    }

    /**
     * Actions to execute when run
     *
     * @param $currentTick
     *
     * @return void
     */
    abstract public function onRun($currentTick);

    /**
     * Actions to execute if the Task is cancelled
     */
    public function onCancel()
    {
    }
}
