<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Nageki no Bourei wa Intai Shitai",
            "slug" => "negeki-no-bourei",
            "author" => "Tsukikage",
            "body" => "Existing all over the world sleeps treasure tools with special powers.
    
            Riches, Prestige, and finally Power.
            
            Chasing glory, an era where Treasure Hunters rampage through Treasure Shrines without regard for danger.
            
            Together with his childhood friends, Cry shares the dream of becoming a hunter. On their first expedition he notices that out of the six of them, he is the only one without any talent.
            
            However, that was only the beginning of their adventures.
            
            “It’s too unreasonable. I want to quit this dangerous job already. I’m gonna throw up. ”
            
            “Ok, got it. In other words we should get strong enough to cover your part too. Nice handicap.”
            
            “Don’t worry Cry-chan. We’ll make sure to protect you.”
            
            “Ah, stop. If you step there you’ll disappear without even leaving dust behind. Take care, ok leader?”
            
            Protected by his childhood friends that are too strong, relying on his juniors and other hunters – they aim at being heroes and obtaining treasure.
            
            Will Cry be able to quit being a hunter while still in one piece?"
        ],
        [
            "title" => "My Death Flag no Sign of Ending",
            "slug" => "my-death-flag",
            "author" => "Achiko",
            "body" => "When he came to his senses, Hirasawa Kazuki, a normal university student, found himself in possession of the body of a game’s character.
    
            Moreover, it was Harold Stokes, the story’s most hated character who was even given the title 『King of Tr*sh』by the players. Myriads of landmines were just waiting for him to step on them, like death flags!
            
            Will Harold be able to clear the survival route while avoiding the countless death flags in his way?!"
        ],
        [
            "title" => "Rebuild World",
            "slug" => "rebuild-wordl",
            "author" => "Hikoukai",
            "body" => "Akira, was born in the slum and wishes to get out but the only way he could was to risk his life in these ruins as a hunter.
    
            These ruins, known as the Old World, were danger zones where beasts roam; buildings crumble, and other humans hunt their own…
            
            Though Akira had expected to face death countless times there, he had never expected to meet a naked woman there.
            
            Standing exposed with her curvaceous curves and bosom out for all to admire, Alpha, the breathtaking beauty stood there, looking back at him.
            
            This mysterious enchantress walked towards Akira and…"
        ],
        [
            "title" => "Running Away From Hero",
            "slug" => "running-away-from-hero",
            "author" => "Phantom Of The Moonlit Night",
            "body" => "After living for a long time in a fantasy world, I ended up becoming a villain!
    
            Whilst I beat up both bad guys and good guys as a villain, the legendary hero appeared in front of me.
            
            “Teacher!”
            
            He seems to be my disciple. Crap…"
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
        //properti biasa : return $this->blog_post;
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);

        //!Cara Array biasa
        // $posts = self::$blog_posts;

        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        // return $post;
    }
}
