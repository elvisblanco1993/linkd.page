<?php

namespace App\Http\Livewire\Page;

use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Settings extends Component
{
    use WithFileUploads;
    public $handler, $name, $bio, $avatar;
    public $tiktok,
            $facebook,
            $messenger,
            $whatsapp,
            $instagram,
            $twitter,
            $onlyfans,
            $pinterest,
            $etsy,
            $amazon,
            $ebay,
            $linkedin,
            $indeed,
            $unsplash,
            $pexels,
            $_500px,
            $snapchat,
            $youtube,
            $spotify,
            $medium,
            $vimeo,
            $tumblr,
            $reddit,
            $applemusic,
            $applepodcasts;

    public function saveProfile()
    {
        $page_id = auth()->user()->page->id;
        $this->validate([
            'handler' => "required|regex:/^\S*$/u|unique:pages,handler,$page_id"
        ]);
        if (!is_null($this->avatar)) {
            if (auth()->user()->page->avatar) {
                Storage::delete('public/avatars/'. auth()->user()->page->avatar);
            }
            $this->avatar->storeAs('public/avatars', $this->avatar->getClientOriginalName());
        }


        Page::where('user_id', auth()->user()->id)
            ->update([
                'handler' => $this->handler,
                'name' => $this->name,
                'bio' => $this->bio,
                'avatar' => (!is_null($this->avatar)) ? $this->avatar->getClientOriginalName() : auth()->user()->page->avatar
            ]);

        return redirect()->route('linkd.settings');
    }

    public function saveSocialMedia()
    {
        $page_id = auth()->user()->page->id;

        $platforms = [
            'tiktok', 'facebook', 'messenger', 'whatsapp', 'instagram', 'twitter', 'onlyfans', 'pinterest', 'etsy', 'amazon', 'ebay', 'linkedin', 'indeed', 'unsplash', 'pexels', '_500px', 'snapchat', 'youtube', 'spotify', 'medium', 'vimeo', 'tumblr', 'reddit', 'applemusic', 'applepodcasts'
        ];

        foreach ($platforms as $platform) {
            if ($this->$platform !== null) {
                DB::table('social_media_links')
                    ->updateOrInsert([
                        'page_id' => $page_id,
                        'type' => $platform,
                    ],
                    [
                        'page_id' => $page_id,
                        'type' => $platform,
                        'url' => $this->$platform ?? null,
                        'uuid' => Str::uuid()->toString(),
                    ]);
            }

            // Deletes the links removed from the settings page
            DB::table('social_media_links')
                ->where('page_id', $page_id)
                ->whereNotNull('type')
                ->where('url', '')
                ->delete();
        }

        return redirect()->route('linkd.settings');
    }

    public function render()
    {
        $page = auth()->user()->page;
        $page_id = $page->id;
        $platforms = [
            'tiktok', 'facebook', 'messenger', 'whatsapp', 'instagram', 'twitter', 'onlyfans', 'pinterest', 'etsy', 'amazon', 'ebay', 'linkedin', 'indeed', 'unsplash', 'pexels', '_500px', 'snapchat', 'youtube', 'spotify', 'medium', 'vimeo', 'tumblr', 'reddit', 'applemusic', 'applepodcasts'
        ];

        $this->handler = $page->handler;
        $this->name = $page->name;
        $this->bio = $page->bio;

        foreach ($platforms as $platform) {
            if (DB::table('social_media_links')->where('page_id', $page_id)->where('type', $platform)->count() == 1) {
                $this->$platform = DB::table('social_media_links')->where('page_id', $page_id)->where('type', $platform)->first()->url;
            }
        }

        return view('livewire.page.settings');
    }
}
