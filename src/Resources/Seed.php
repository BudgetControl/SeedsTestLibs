<?php
namespace Budgetcontrol\Seeds\Resources;

/**
 * Represents a seed for generating test data.
 */
class Seed {
    
    /**
     * Runs all the seeds.
     *
     * @return void
     */
    public function runAllSeeds() {
        $seedClasses = $this->getSeedClasses();

        foreach ($seedClasses as $seedClass) {
            $seedClass::run();
        }
    }

    /**
     * Runs a seed with the given seed name.
     *
     * @param string $seedName The name of the seed to run.
     * @return void
     */
    public function runSeed(string $seedName) {
        $seedClasses = $this->getSeedClasses();

        $seedClass = array_filter($seedClasses, function ($seedClass) use ($seedName) {
            return $seedClass === $seedName;
        });

        if (count($seedClass) === 0) {
            throw new \Exception("seed $seedName not found");
        }

        return new $seedClass[0];
    }

    /**
     * Retrieves the seed classes.
     *
     * @return array The seed classes.
     */
    private function getSeedClasses() {
        $seedDirectory = __DIR__ . '/Seeds';

        $seedFiles = scandir($seedDirectory);

        $seedFiles = array_filter($seedFiles, function ($file) {
            return pathinfo($file, PATHINFO_EXTENSION) === 'php' && $file !== '.' && $file !== '..';
        });

        $seedClasses = array_map(function ($file) use ($seedDirectory) {
            $className = pathinfo($file, PATHINFO_FILENAME);
            return "Seeds\\$className";
        }, $seedFiles);

        return $seedClasses;
    }
}