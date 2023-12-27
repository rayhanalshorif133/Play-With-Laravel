<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $bookTitles = [
            "Whispers of the Forgotten",
            "Echoes in the Abyss",
            "Chronicles of the Celestial Nexus",
            "The Enigma Protocol",
            "Serenade of Shadows",
            "Mysteries Beyond the Horizon",
            "Ephemeral Dreams",
            "The Alchemy of Time",
            "Harmony of the Spheres",
            "Infinite Improbability",
            "The Quantum Quandary",
            "Ciphers of the Cosmic Code",
            "Labyrinth of Luminous Legends",
            "Songs of the Starlight Symphony",
            "Riddles in the Radiant Realms",
            "The Velvet Vortex",
            "Whirlwind of Whispers",
            "Aurora's Embrace",
            "Silhouettes in the Silvery Sky",
            "Threads of Destiny",
            "Secrets of the Sapphire Sanctuary",
            "The Nebula Nexus",
            "Legends of Lunar Lullabies",
            "Phantoms of the Forgotten Realm",
            "The Emerald Enchantment",
            "The Celestial Conundrum",
            "Whispers of Wandering Souls",
            "The Oracle's Odyssey",
            "Enchanted Echoes",
            "Chronicles of Crystal Castles",
            "The Velvet Voyage",
            "Specters in the Starlight",
            "Journey to the Jade Jungle",
            "The Enchanted Elixir",
            "Realm of the Ruby Rose",
            "Sirens of the Silver Sea",
            "The Quantum Quest",
            "The Ethereal Epoch",
            "Echoes of Eternity",
            "Cryptic Constellations",
            "Beyond the Binary",
        ];

        return [
            'chapter' => $this->faker->numberBetween(1, 100),
            'title' => $this->faker->randomElement($bookTitles),
            'page' => $this->faker->numberBetween(300, 4000),
        ];
    }
}
