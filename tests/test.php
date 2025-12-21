<?php

require '../vendor/autoload.php';

use Diolan12\Dijkstra;
use Diolan12\NoPathException;

class Test
{
    /**
     * Test Dijkstra class to find shortest path
     *
     * @return void
     */
    public static function testShortestPath()
    {
        $dijkstra = Dijkstra::instance();

        // Add vertices and edges
        $dijkstra->addVertex('A', ['B' => 4, 'C' => 2]);
        $dijkstra->addVertex('B', ['A' => 4, 'C' => 1, 'D' => 4]);
        $dijkstra->addVertex('C', ['A' => 2, 'B' => 1, 'D' => 6]);
        $dijkstra->addEdge('D', 'B', 4)->addEdge('D', 'C', 6);

        $paths = $dijkstra->findShortestPath('A', 'D', true);
        var_dump($paths);
    }
}

Test::testShortestPath();