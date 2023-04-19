<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Article
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperArticle {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperPost {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * App\Models\clients
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|clients newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|clients newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|clients query()
 * @method static \Illuminate\Database\Eloquent\Builder|clients whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|clients whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|clients whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperclients {}
}

namespace App\Models{
/**
 * App\Models\login_info
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|login_info newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|login_info newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|login_info query()
 * @method static \Illuminate\Database\Eloquent\Builder|login_info whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|login_info whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|login_info whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperlogin_info {}
}

namespace App\Models{
/**
 * App\Models\platforms
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|platforms newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|platforms newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|platforms query()
 * @method static \Illuminate\Database\Eloquent\Builder|platforms whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|platforms whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|platforms whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperplatforms {}
}

namespace App\Models{
/**
 * App\Models\roles
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|roles newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|roles newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|roles query()
 * @method static \Illuminate\Database\Eloquent\Builder|roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|roles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|roles whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperroles {}
}

namespace App\Models{
/**
 * App\Models\user_login_info
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|user_login_info newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_login_info newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|user_login_info query()
 * @method static \Illuminate\Database\Eloquent\Builder|user_login_info whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_login_info whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|user_login_info whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class IdeHelperuser_login_info {}
}

