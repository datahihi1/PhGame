<?php
namespace Datahihi1\Phgame;

class GameEngine {
    private bool $running = true;

    public function run() {
        while ($this->running) {
            $this->update();
            $this->render();
            usleep(100000); // Giữ tốc độ game
        }
    }

    private function update() {
        // Cập nhật trạng thái game
    }

    private function render() {
        echo "\033[2J\033[H"; // Xóa màn hình terminal
        echo "Game Running...\n";
    }
}

