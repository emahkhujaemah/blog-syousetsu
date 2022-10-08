<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Author;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Emah Khujaemah',
            'username' => 'emahkhujaemah',
            'email' => 'khuza.emah24@gmail.com',
            'password' => bcrypt('password')
        ]);


        Category::create([
            'name' => 'Japanese',
            'slug' => 'japanese'
        ]);

        Category::create([
            'name' => 'Korea',
            'slug' => 'korea'
        ]);

        Category::create([
            'name' => 'Chinese',
            'slug'
            => 'chinese'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Author::create([
            'name' => 'Tsukikage',
            'title' => 'Nageki no Bourei wa Intai Shitai',
            'slug' => 'tsukikage',
            'category_id' => 1,
            'twitter' => '@ktsuki_novel'
        ]);

        Author::create([
            'name' => 'Geunseo',
            'title' => 'The S Classes That I Raised',
            'slug' => 'geunseo',
            'category_id' => 2,
            'twitter' => '근서'
        ]);
        Author::create([
            'name' => 'Eagle Eats The Chick',
            'title' => 'Global Martial Arts',
            'slug' => 'eagle-eats-the-chick',
            'category_id' => 3,
            'twitter' => '老鹰吃小鸡'
        ]);
        Author::create([
            'name' => '	Phantom Of The Moonlit Night',
            'title' => 'Running Away From Hero!',
            'slug' => 'phantom-of-the-moonlit-night',
            'category_id' => 2,
            'twitter' => '월야-팬텀'
        ]);

        Author::create([
            'name' => 'Achiko',
            'title' => 'Ore no Shibou Flag wa Todomaru o Shiranai',
            'slug' => 'achiko',
            'category_id' => 1,
            'twitter' => '@orefura'
        ]);

        Author::create([
            'name' => 'Nagatsuki Teppei',
            'title' => 'Re:Zero Kara Hajimeru Isekai Seikatsu',
            'slug' => 're-zero-kara-hajimeru-isekai-seikatsu',
            'category_id' => 1,
            'twitter' => '@nezumiironyanko'
        ]);

        Author::create([
            'name' => 'Yuuki Yaku',
            'title' => 'Rokudenashi Majutsu Koushi to Akashic Records',
            'slug' => 'rokudenashi-majutsu',
            'category_id' => 1,
            'twitter' => '@yuuki-'
        ]);

        // Post::factory(20)->create();

        Post::create([
            'title' => 'Nageki no Bourei wa Intai Shitai',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => "negeki-no-bourei",
            'author_id' => 1,
            'excerpt' => 'Existing all over the world sleeps treasure tools with special powers.Riches, Prestige, and finally Power.Chasing glory, an era where Treasure Hunters rampage through Treasure Shrines without regard for danger.',
            'body' => "<p>Existing all over the world sleeps treasure tools with special powers.Riches, Prestige, and finally Power.Chasing glory, an era where Treasure Hunters rampage through Treasure Shrines without regard for danger.Together with his childhood friends, Cry shares the dream of becoming a hunter. On their first expedition he notices that out of the six of them, he is the only one without any talent.However, that was only the beginning of their adventures.</p>
            <p>'Its too unreasonable. I want to quit this dangerous job already. I’m gonna throw up.'
            'Ok, got it. In other words we should get strong enough to cover your part too. Nice handicap.'
            'Don’t worry Cry-chan. We’ll make sure to protect you.'
            'Ah, stop. If you step there you’ll disappear without even leaving dust behind. Take care, ok leader?'
            Protected by his childhood friends that are too strong, relying on his juniors and other hunters – they aim at being heroes and obtaining treasure. Will Cry be able to quit being a hunter while still in one piece?</p>"
        ]);

        Post::create([
            'title' => 'Re:Zero Kara Hajimeru Isekai Seikatsu',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 're-zero-kara-hajimeru',
            'author_id' => 6,
            'excerpt' => 'Suddenly, high school student Natsuki Subaru has been summoned to another world on the way back from the convenience store. After being summoned to another world and no sign of the one who summoned him,',
            'body' => "<p>Suddenly, high school student Natsuki Subaru has been summoned to another world on the way back from the convenience store. After being summoned to another world and no sign of the one who summoned him, things become worse when he is attacked. However, when he is saved by a mysterious silver-haired girl and her companion, a spirit named Puck, Subaru cooperates with the girl to return the favor by helping to find something that was stolen from her.</p> <p>When they finally manage to get a clue and go to the place it was gonna be sold Subaru and the girl are mysteriously attacked and killed by someone. Subaru then awakens hours before his and the silver haired girls death. After dying a couple more times with the same result he dubs his ability - Return By Death.</p>"
        ]);

        Post::create([
            'title' => 'Ore no Shibou Flag wa Todomaru Koto o Shiranai',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'my-death-flag',
            'author_id' => 5,
            'excerpt' => 'When he came to his senses, Hirasawa Kazuki, a normal university student, found himself in possession of the body of a game’s character.Moreover, it was Harold Stokes,',
            'body' => "<p>When he came to his senses, Hirasawa Kazuki, a normal university student, found himself in possession of the body of a game’s character.Moreover, it was Harold Stokes, the story’s most hated character who was even given the title 『King of Tr*sh』by the players.</p> <p>Myriads of landmines were just waiting for him to step on them, like death flags! Will Harold be able to clear the survival route while avoiding the countless death flags in his way?!</p>"
        ]);

        Post::create([
            'title' => 'Running Away From Hero',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'running-away-from-hero',
            'author_id' => 4,
            'excerpt' => 'After living for a long time in a fantasy world, I ended up becoming a villain! Whilst I beat up both bad guys and good guys as a villain, the legendary hero appeared in front of me.',
            'body' => "<p>After living for a long time in a fantasy world, I ended up becoming a villain! Whilst I beat up both bad guys and good guys as a villain, the legendary hero appeared in front of me. “Teacher!” He seems to be my disciple. Crap…</p>"
        ]);

        Post::create([
            'title' => 'Rokudenashi Majutsu Koushi to Akashic Records',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'rokudenashi-majutsu',
            'author_id' => 7,
            'excerpt' => 'The story takes place in Alzano Empire, which is the home to one of the most distinguished magic schools in the world: The Alzano Imperial Magic Academy. Here, ambitious young students undergo training to become competent magicians.',
            'body' => "<p>The story takes place in Alzano Empire, which is the home to one of the most distinguished magic schools in the world: The Alzano Imperial Magic Academy. Here, ambitious young students undergo training to become competent magicians. Sistine Fibel, a stern noble girl, and her bright-eyed best friend Rumia Tingel attend the Academy, determined to cultivate their magical skills.</p> <p>However, their world is thrown for a loop when their favorite teacher suddenly retires and the enigmatic Glenn Radars replaces him. His lazy and indifferent attitude toward life and magic quickly puts him at odds with his class. What's more, nefarious forces hidden within the empire's walls start to become active, and Sistine, Rumia, and Glenn find themselves caught up in their schemes.</p>"
        ]);
    }
}
