<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Client::create([
            'name' => 'Sara Tardast',
            'image' => 'tcYUpXmJDmM7AaQ8BPqZow8SBtzNAmvXBishqe8r.jpeg',
            'role' => 'EXECUTIVE MANAGER',
            'testimony' => "Je suis très contente d'être là. Je suis très contente d'être là.Je suis très contente d'être là.Je suis très contente d'être là.",
        ]);

        Client::create([
            'name' => 'Chahid Snoussi',
            'image' => 'ewVnaneuCspikXJvPp0PPxfy2gks1XCgzI9QcKyn.jpeg',
            'role' => 'CEO COMPANY',
            'testimony' => "Je suis le meilleur. Je suis le meilleur. Je suis le meilleur. Je suis le meilleur. Je suis le meilleur. Je suis le meilleur.",
        ]);
        Client::create([
            'name' => 'Isrou Egerie',
            'image' => 'gDWYjdvgRGezCgObX7PBvX7OCs2mvRKvB3Po582x.jpeg',
            'role' => 'SECRETARY',
            'testimony' => 'Je suis la codeuse app qui est sur les bus. Je suis la codeuse app qui est sur les bus. Je suis la codeuse app qui est sur les bus.',
        ]);
        Client::create([
            'name' => 'Sara Tardast',
            'image' => 'tcYUpXmJDmM7AaQ8BPqZow8SBtzNAmvXBishqe8r.jpeg',
            'role' => 'EXECUTIVE MANAGER',
            'testimony' => "Je suis très contente d'être là. Je suis très contente d'être là.Je suis très contente d'être là.Je suis très contente d'être là.",
        ]);

        Client::create([
            'name' => 'Chahid Snoussi',
            'image' => 'ewVnaneuCspikXJvPp0PPxfy2gks1XCgzI9QcKyn.jpeg',
            'role' => 'CEO COMPANY',
            'testimony' => "Je suis le meilleur. Je suis le meilleur. Je suis le meilleur. Je suis le meilleur. Je suis le meilleur. Je suis le meilleur.",
        ]);
        Client::create([
            'name' => 'Isrou Egerie',
            'image' => 'gDWYjdvgRGezCgObX7PBvX7OCs2mvRKvB3Po582x.jpeg',
            'role' => 'SECRETARY',
            'testimony' => 'Je suis la codeuse app qui est sur les bus. Je suis la codeuse app qui est sur les bus. Je suis la codeuse app qui est sur les bus.',
        ]);
    }
}
