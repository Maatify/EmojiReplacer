[![Current version](https://img.shields.io/packagist/v/maatify/emoji-replacer)][pkg]
[![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/maatify/emoji-replacer)][pkg]
[![Monthly Downloads](https://img.shields.io/packagist/dm/maatify/emoji-replacer)][pkg-stats]
[![Total Downloads](https://img.shields.io/packagist/dt/maatify/emoji-replacer)][pkg-stats]
[![Stars](https://img.shields.io/packagist/stars/maatify/emoji-replacer)](https://github.com/maatify/EmojiReplacer/stargazers)

[pkg]: <https://packagist.org/packages/maatify/emoji-replacer>
[pkg-stats]: <https://packagist.org/packages/maatify/emoji-replacer/stats>

# Installation

```shell
composer require maatify/emoji-replacer
```

# Usage
```PHP
use Maatify\Emoji\EmojiConverter;

require __DIR__ . '/vendor/autoload.php';

// Converting emojis to codepoints
$input = "Hello 🌍! How are you? 😊:: 🔥";
$converted = EmojiConverter::emojiToCodepoint($input);
echo $converted . "\n";
// Output: Hello U+1F30D! How are you? U+1F60A

// Converting codepoints back to emojis
$backToEmojis = EmojiConverter::codepointToEmoji($converted);
echo $backToEmojis . "\n";
// Output: Hello 🌍! How are you? 😊
```

### Support Emoji List

<table>
    <tr>
        <td>codepoint</td>
        <td>emoji</td>
    </tr>

<tr>
    <td>
        <div class="emoji-item">U+1F600</div>
    </td>
    <td>
        <div class="emoji-item">😀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F601</div>
    </td>
    <td>
        <div class="emoji-item">😁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F602</div>
    </td>
    <td>
        <div class="emoji-item">😂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F603</div>
    </td>
    <td>
        <div class="emoji-item">😃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F604</div>
    </td>
    <td>
        <div class="emoji-item">😄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F605</div>
    </td>
    <td>
        <div class="emoji-item">😅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F606</div>
    </td>
    <td>
        <div class="emoji-item">😆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F607</div>
    </td>
    <td>
        <div class="emoji-item">😇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F608</div>
    </td>
    <td>
        <div class="emoji-item">😈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F609</div>
    </td>
    <td>
        <div class="emoji-item">😉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F60A</div>
    </td>
    <td>
        <div class="emoji-item">😊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F60B</div>
    </td>
    <td>
        <div class="emoji-item">😋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F60C</div>
    </td>
    <td>
        <div class="emoji-item">😌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F60D</div>
    </td>
    <td>
        <div class="emoji-item">😍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F60E</div>
    </td>
    <td>
        <div class="emoji-item">😎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F60F</div>
    </td>
    <td>
        <div class="emoji-item">😏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F610</div>
    </td>
    <td>
        <div class="emoji-item">😐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F611</div>
    </td>
    <td>
        <div class="emoji-item">😑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F612</div>
    </td>
    <td>
        <div class="emoji-item">😒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F613</div>
    </td>
    <td>
        <div class="emoji-item">😓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F614</div>
    </td>
    <td>
        <div class="emoji-item">😔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F615</div>
    </td>
    <td>
        <div class="emoji-item">😕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F616</div>
    </td>
    <td>
        <div class="emoji-item">😖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F617</div>
    </td>
    <td>
        <div class="emoji-item">😗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F618</div>
    </td>
    <td>
        <div class="emoji-item">😘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F619</div>
    </td>
    <td>
        <div class="emoji-item">😙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F61A</div>
    </td>
    <td>
        <div class="emoji-item">😚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F61B</div>
    </td>
    <td>
        <div class="emoji-item">😛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F61C</div>
    </td>
    <td>
        <div class="emoji-item">😜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F61D</div>
    </td>
    <td>
        <div class="emoji-item">😝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F61E</div>
    </td>
    <td>
        <div class="emoji-item">😞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F61F</div>
    </td>
    <td>
        <div class="emoji-item">😟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F620</div>
    </td>
    <td>
        <div class="emoji-item">😠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F621</div>
    </td>
    <td>
        <div class="emoji-item">😡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F622</div>
    </td>
    <td>
        <div class="emoji-item">😢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F623</div>
    </td>
    <td>
        <div class="emoji-item">😣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F624</div>
    </td>
    <td>
        <div class="emoji-item">😤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F625</div>
    </td>
    <td>
        <div class="emoji-item">😥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F626</div>
    </td>
    <td>
        <div class="emoji-item">😦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F627</div>
    </td>
    <td>
        <div class="emoji-item">😧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F628</div>
    </td>
    <td>
        <div class="emoji-item">😨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F629</div>
    </td>
    <td>
        <div class="emoji-item">😩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F62A</div>
    </td>
    <td>
        <div class="emoji-item">😪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F62B</div>
    </td>
    <td>
        <div class="emoji-item">😫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F62C</div>
    </td>
    <td>
        <div class="emoji-item">😬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F62D</div>
    </td>
    <td>
        <div class="emoji-item">😭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F62E</div>
    </td>
    <td>
        <div class="emoji-item">😮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F62F</div>
    </td>
    <td>
        <div class="emoji-item">😯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F630</div>
    </td>
    <td>
        <div class="emoji-item">😰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F631</div>
    </td>
    <td>
        <div class="emoji-item">😱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F632</div>
    </td>
    <td>
        <div class="emoji-item">😲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F633</div>
    </td>
    <td>
        <div class="emoji-item">😳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F634</div>
    </td>
    <td>
        <div class="emoji-item">😴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F635</div>
    </td>
    <td>
        <div class="emoji-item">😵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F636</div>
    </td>
    <td>
        <div class="emoji-item">😶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F637</div>
    </td>
    <td>
        <div class="emoji-item">😷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F638</div>
    </td>
    <td>
        <div class="emoji-item">😸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F639</div>
    </td>
    <td>
        <div class="emoji-item">😹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F63A</div>
    </td>
    <td>
        <div class="emoji-item">😺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F63B</div>
    </td>
    <td>
        <div class="emoji-item">😻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F63C</div>
    </td>
    <td>
        <div class="emoji-item">😼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F63D</div>
    </td>
    <td>
        <div class="emoji-item">😽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F63E</div>
    </td>
    <td>
        <div class="emoji-item">😾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F63F</div>
    </td>
    <td>
        <div class="emoji-item">😿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F640</div>
    </td>
    <td>
        <div class="emoji-item">🙀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F641</div>
    </td>
    <td>
        <div class="emoji-item">🙁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F642</div>
    </td>
    <td>
        <div class="emoji-item">🙂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F643</div>
    </td>
    <td>
        <div class="emoji-item">🙃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F644</div>
    </td>
    <td>
        <div class="emoji-item">🙄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F645</div>
    </td>
    <td>
        <div class="emoji-item">🙅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F646</div>
    </td>
    <td>
        <div class="emoji-item">🙆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F647</div>
    </td>
    <td>
        <div class="emoji-item">🙇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F648</div>
    </td>
    <td>
        <div class="emoji-item">🙈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F649</div>
    </td>
    <td>
        <div class="emoji-item">🙉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F64A</div>
    </td>
    <td>
        <div class="emoji-item">🙊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F64B</div>
    </td>
    <td>
        <div class="emoji-item">🙋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F64C</div>
    </td>
    <td>
        <div class="emoji-item">🙌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F64D</div>
    </td>
    <td>
        <div class="emoji-item">🙍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F64E</div>
    </td>
    <td>
        <div class="emoji-item">🙎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F64F</div>
    </td>
    <td>
        <div class="emoji-item">🙏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F300</div>
    </td>
    <td>
        <div class="emoji-item">🌀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F301</div>
    </td>
    <td>
        <div class="emoji-item">🌁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F302</div>
    </td>
    <td>
        <div class="emoji-item">🌂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F303</div>
    </td>
    <td>
        <div class="emoji-item">🌃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F304</div>
    </td>
    <td>
        <div class="emoji-item">🌄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F305</div>
    </td>
    <td>
        <div class="emoji-item">🌅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F306</div>
    </td>
    <td>
        <div class="emoji-item">🌆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F307</div>
    </td>
    <td>
        <div class="emoji-item">🌇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F308</div>
    </td>
    <td>
        <div class="emoji-item">🌈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F309</div>
    </td>
    <td>
        <div class="emoji-item">🌉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F30A</div>
    </td>
    <td>
        <div class="emoji-item">🌊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F30B</div>
    </td>
    <td>
        <div class="emoji-item">🌋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F30C</div>
    </td>
    <td>
        <div class="emoji-item">🌌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F30D</div>
    </td>
    <td>
        <div class="emoji-item">🌍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F30E</div>
    </td>
    <td>
        <div class="emoji-item">🌎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F30F</div>
    </td>
    <td>
        <div class="emoji-item">🌏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F310</div>
    </td>
    <td>
        <div class="emoji-item">🌐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F311</div>
    </td>
    <td>
        <div class="emoji-item">🌑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F312</div>
    </td>
    <td>
        <div class="emoji-item">🌒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F313</div>
    </td>
    <td>
        <div class="emoji-item">🌓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F314</div>
    </td>
    <td>
        <div class="emoji-item">🌔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F315</div>
    </td>
    <td>
        <div class="emoji-item">🌕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F316</div>
    </td>
    <td>
        <div class="emoji-item">🌖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F317</div>
    </td>
    <td>
        <div class="emoji-item">🌗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F318</div>
    </td>
    <td>
        <div class="emoji-item">🌘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F319</div>
    </td>
    <td>
        <div class="emoji-item">🌙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F31A</div>
    </td>
    <td>
        <div class="emoji-item">🌚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F31B</div>
    </td>
    <td>
        <div class="emoji-item">🌛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F31C</div>
    </td>
    <td>
        <div class="emoji-item">🌜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F31D</div>
    </td>
    <td>
        <div class="emoji-item">🌝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F31E</div>
    </td>
    <td>
        <div class="emoji-item">🌞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F31F</div>
    </td>
    <td>
        <div class="emoji-item">🌟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F320</div>
    </td>
    <td>
        <div class="emoji-item">🌠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F321</div>
    </td>
    <td>
        <div class="emoji-item">🌡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F322</div>
    </td>
    <td>
        <div class="emoji-item">🌢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F323</div>
    </td>
    <td>
        <div class="emoji-item">🌣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F324</div>
    </td>
    <td>
        <div class="emoji-item">🌤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F325</div>
    </td>
    <td>
        <div class="emoji-item">🌥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F326</div>
    </td>
    <td>
        <div class="emoji-item">🌦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F327</div>
    </td>
    <td>
        <div class="emoji-item">🌧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F328</div>
    </td>
    <td>
        <div class="emoji-item">🌨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F329</div>
    </td>
    <td>
        <div class="emoji-item">🌩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F32A</div>
    </td>
    <td>
        <div class="emoji-item">🌪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F32B</div>
    </td>
    <td>
        <div class="emoji-item">🌫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F32C</div>
    </td>
    <td>
        <div class="emoji-item">🌬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F32D</div>
    </td>
    <td>
        <div class="emoji-item">🌭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F32E</div>
    </td>
    <td>
        <div class="emoji-item">🌮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F32F</div>
    </td>
    <td>
        <div class="emoji-item">🌯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F330</div>
    </td>
    <td>
        <div class="emoji-item">🌰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F331</div>
    </td>
    <td>
        <div class="emoji-item">🌱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F332</div>
    </td>
    <td>
        <div class="emoji-item">🌲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F333</div>
    </td>
    <td>
        <div class="emoji-item">🌳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F334</div>
    </td>
    <td>
        <div class="emoji-item">🌴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F335</div>
    </td>
    <td>
        <div class="emoji-item">🌵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F336</div>
    </td>
    <td>
        <div class="emoji-item">🌶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F337</div>
    </td>
    <td>
        <div class="emoji-item">🌷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F338</div>
    </td>
    <td>
        <div class="emoji-item">🌸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F339</div>
    </td>
    <td>
        <div class="emoji-item">🌹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F33A</div>
    </td>
    <td>
        <div class="emoji-item">🌺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F33B</div>
    </td>
    <td>
        <div class="emoji-item">🌻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F33C</div>
    </td>
    <td>
        <div class="emoji-item">🌼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F33D</div>
    </td>
    <td>
        <div class="emoji-item">🌽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F33E</div>
    </td>
    <td>
        <div class="emoji-item">🌾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F33F</div>
    </td>
    <td>
        <div class="emoji-item">🌿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F340</div>
    </td>
    <td>
        <div class="emoji-item">🍀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F341</div>
    </td>
    <td>
        <div class="emoji-item">🍁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F342</div>
    </td>
    <td>
        <div class="emoji-item">🍂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F343</div>
    </td>
    <td>
        <div class="emoji-item">🍃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F344</div>
    </td>
    <td>
        <div class="emoji-item">🍄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F345</div>
    </td>
    <td>
        <div class="emoji-item">🍅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F346</div>
    </td>
    <td>
        <div class="emoji-item">🍆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F347</div>
    </td>
    <td>
        <div class="emoji-item">🍇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F348</div>
    </td>
    <td>
        <div class="emoji-item">🍈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F349</div>
    </td>
    <td>
        <div class="emoji-item">🍉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F34A</div>
    </td>
    <td>
        <div class="emoji-item">🍊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F34B</div>
    </td>
    <td>
        <div class="emoji-item">🍋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F34C</div>
    </td>
    <td>
        <div class="emoji-item">🍌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F34D</div>
    </td>
    <td>
        <div class="emoji-item">🍍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F34E</div>
    </td>
    <td>
        <div class="emoji-item">🍎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F34F</div>
    </td>
    <td>
        <div class="emoji-item">🍏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F350</div>
    </td>
    <td>
        <div class="emoji-item">🍐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F351</div>
    </td>
    <td>
        <div class="emoji-item">🍑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F352</div>
    </td>
    <td>
        <div class="emoji-item">🍒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F353</div>
    </td>
    <td>
        <div class="emoji-item">🍓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F354</div>
    </td>
    <td>
        <div class="emoji-item">🍔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F355</div>
    </td>
    <td>
        <div class="emoji-item">🍕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F356</div>
    </td>
    <td>
        <div class="emoji-item">🍖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F357</div>
    </td>
    <td>
        <div class="emoji-item">🍗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F358</div>
    </td>
    <td>
        <div class="emoji-item">🍘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F359</div>
    </td>
    <td>
        <div class="emoji-item">🍙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F35A</div>
    </td>
    <td>
        <div class="emoji-item">🍚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F35B</div>
    </td>
    <td>
        <div class="emoji-item">🍛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F35C</div>
    </td>
    <td>
        <div class="emoji-item">🍜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F35D</div>
    </td>
    <td>
        <div class="emoji-item">🍝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F35E</div>
    </td>
    <td>
        <div class="emoji-item">🍞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F35F</div>
    </td>
    <td>
        <div class="emoji-item">🍟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F360</div>
    </td>
    <td>
        <div class="emoji-item">🍠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F361</div>
    </td>
    <td>
        <div class="emoji-item">🍡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F362</div>
    </td>
    <td>
        <div class="emoji-item">🍢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F363</div>
    </td>
    <td>
        <div class="emoji-item">🍣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F364</div>
    </td>
    <td>
        <div class="emoji-item">🍤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F365</div>
    </td>
    <td>
        <div class="emoji-item">🍥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F366</div>
    </td>
    <td>
        <div class="emoji-item">🍦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F367</div>
    </td>
    <td>
        <div class="emoji-item">🍧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F368</div>
    </td>
    <td>
        <div class="emoji-item">🍨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F369</div>
    </td>
    <td>
        <div class="emoji-item">🍩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F36A</div>
    </td>
    <td>
        <div class="emoji-item">🍪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F36B</div>
    </td>
    <td>
        <div class="emoji-item">🍫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F36C</div>
    </td>
    <td>
        <div class="emoji-item">🍬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F36D</div>
    </td>
    <td>
        <div class="emoji-item">🍭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F36E</div>
    </td>
    <td>
        <div class="emoji-item">🍮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F36F</div>
    </td>
    <td>
        <div class="emoji-item">🍯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F370</div>
    </td>
    <td>
        <div class="emoji-item">🍰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F371</div>
    </td>
    <td>
        <div class="emoji-item">🍱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F372</div>
    </td>
    <td>
        <div class="emoji-item">🍲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F373</div>
    </td>
    <td>
        <div class="emoji-item">🍳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F374</div>
    </td>
    <td>
        <div class="emoji-item">🍴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F375</div>
    </td>
    <td>
        <div class="emoji-item">🍵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F376</div>
    </td>
    <td>
        <div class="emoji-item">🍶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F377</div>
    </td>
    <td>
        <div class="emoji-item">🍷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F378</div>
    </td>
    <td>
        <div class="emoji-item">🍸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F379</div>
    </td>
    <td>
        <div class="emoji-item">🍹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F37A</div>
    </td>
    <td>
        <div class="emoji-item">🍺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F37B</div>
    </td>
    <td>
        <div class="emoji-item">🍻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F37C</div>
    </td>
    <td>
        <div class="emoji-item">🍼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F37D</div>
    </td>
    <td>
        <div class="emoji-item">🍽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F37E</div>
    </td>
    <td>
        <div class="emoji-item">🍾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F37F</div>
    </td>
    <td>
        <div class="emoji-item">🍿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F380</div>
    </td>
    <td>
        <div class="emoji-item">🎀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F381</div>
    </td>
    <td>
        <div class="emoji-item">🎁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F382</div>
    </td>
    <td>
        <div class="emoji-item">🎂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F383</div>
    </td>
    <td>
        <div class="emoji-item">🎃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F384</div>
    </td>
    <td>
        <div class="emoji-item">🎄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F385</div>
    </td>
    <td>
        <div class="emoji-item">🎅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F386</div>
    </td>
    <td>
        <div class="emoji-item">🎆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F387</div>
    </td>
    <td>
        <div class="emoji-item">🎇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F388</div>
    </td>
    <td>
        <div class="emoji-item">🎈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F389</div>
    </td>
    <td>
        <div class="emoji-item">🎉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F38A</div>
    </td>
    <td>
        <div class="emoji-item">🎊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F38B</div>
    </td>
    <td>
        <div class="emoji-item">🎋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F38C</div>
    </td>
    <td>
        <div class="emoji-item">🎌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F38D</div>
    </td>
    <td>
        <div class="emoji-item">🎍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F38E</div>
    </td>
    <td>
        <div class="emoji-item">🎎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F38F</div>
    </td>
    <td>
        <div class="emoji-item">🎏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F390</div>
    </td>
    <td>
        <div class="emoji-item">🎐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F391</div>
    </td>
    <td>
        <div class="emoji-item">🎑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F392</div>
    </td>
    <td>
        <div class="emoji-item">🎒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F393</div>
    </td>
    <td>
        <div class="emoji-item">🎓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F394</div>
    </td>
    <td>
        <div class="emoji-item">🎔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F395</div>
    </td>
    <td>
        <div class="emoji-item">🎕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F396</div>
    </td>
    <td>
        <div class="emoji-item">🎖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F397</div>
    </td>
    <td>
        <div class="emoji-item">🎗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F398</div>
    </td>
    <td>
        <div class="emoji-item">🎘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F399</div>
    </td>
    <td>
        <div class="emoji-item">🎙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F39A</div>
    </td>
    <td>
        <div class="emoji-item">🎚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F39B</div>
    </td>
    <td>
        <div class="emoji-item">🎛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F39C</div>
    </td>
    <td>
        <div class="emoji-item">🎜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F39D</div>
    </td>
    <td>
        <div class="emoji-item">🎝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F39E</div>
    </td>
    <td>
        <div class="emoji-item">🎞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F39F</div>
    </td>
    <td>
        <div class="emoji-item">🎟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A0</div>
    </td>
    <td>
        <div class="emoji-item">🎠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A1</div>
    </td>
    <td>
        <div class="emoji-item">🎡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A2</div>
    </td>
    <td>
        <div class="emoji-item">🎢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A3</div>
    </td>
    <td>
        <div class="emoji-item">🎣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A4</div>
    </td>
    <td>
        <div class="emoji-item">🎤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A5</div>
    </td>
    <td>
        <div class="emoji-item">🎥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A6</div>
    </td>
    <td>
        <div class="emoji-item">🎦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A7</div>
    </td>
    <td>
        <div class="emoji-item">🎧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A8</div>
    </td>
    <td>
        <div class="emoji-item">🎨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3A9</div>
    </td>
    <td>
        <div class="emoji-item">🎩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3AA</div>
    </td>
    <td>
        <div class="emoji-item">🎪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3AB</div>
    </td>
    <td>
        <div class="emoji-item">🎫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3AC</div>
    </td>
    <td>
        <div class="emoji-item">🎬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3AD</div>
    </td>
    <td>
        <div class="emoji-item">🎭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3AE</div>
    </td>
    <td>
        <div class="emoji-item">🎮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3AF</div>
    </td>
    <td>
        <div class="emoji-item">🎯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B0</div>
    </td>
    <td>
        <div class="emoji-item">🎰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B1</div>
    </td>
    <td>
        <div class="emoji-item">🎱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B2</div>
    </td>
    <td>
        <div class="emoji-item">🎲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B3</div>
    </td>
    <td>
        <div class="emoji-item">🎳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B4</div>
    </td>
    <td>
        <div class="emoji-item">🎴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B5</div>
    </td>
    <td>
        <div class="emoji-item">🎵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B6</div>
    </td>
    <td>
        <div class="emoji-item">🎶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B7</div>
    </td>
    <td>
        <div class="emoji-item">🎷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B8</div>
    </td>
    <td>
        <div class="emoji-item">🎸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3B9</div>
    </td>
    <td>
        <div class="emoji-item">🎹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3BA</div>
    </td>
    <td>
        <div class="emoji-item">🎺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3BB</div>
    </td>
    <td>
        <div class="emoji-item">🎻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3BC</div>
    </td>
    <td>
        <div class="emoji-item">🎼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3BD</div>
    </td>
    <td>
        <div class="emoji-item">🎽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3BE</div>
    </td>
    <td>
        <div class="emoji-item">🎾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3BF</div>
    </td>
    <td>
        <div class="emoji-item">🎿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C0</div>
    </td>
    <td>
        <div class="emoji-item">🏀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C1</div>
    </td>
    <td>
        <div class="emoji-item">🏁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C2</div>
    </td>
    <td>
        <div class="emoji-item">🏂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C3</div>
    </td>
    <td>
        <div class="emoji-item">🏃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C4</div>
    </td>
    <td>
        <div class="emoji-item">🏄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C5</div>
    </td>
    <td>
        <div class="emoji-item">🏅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C6</div>
    </td>
    <td>
        <div class="emoji-item">🏆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C7</div>
    </td>
    <td>
        <div class="emoji-item">🏇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C8</div>
    </td>
    <td>
        <div class="emoji-item">🏈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3C9</div>
    </td>
    <td>
        <div class="emoji-item">🏉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3CA</div>
    </td>
    <td>
        <div class="emoji-item">🏊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3CB</div>
    </td>
    <td>
        <div class="emoji-item">🏋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3CC</div>
    </td>
    <td>
        <div class="emoji-item">🏌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3CD</div>
    </td>
    <td>
        <div class="emoji-item">🏍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3CE</div>
    </td>
    <td>
        <div class="emoji-item">🏎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3CF</div>
    </td>
    <td>
        <div class="emoji-item">🏏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D0</div>
    </td>
    <td>
        <div class="emoji-item">🏐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D1</div>
    </td>
    <td>
        <div class="emoji-item">🏑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D2</div>
    </td>
    <td>
        <div class="emoji-item">🏒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D3</div>
    </td>
    <td>
        <div class="emoji-item">🏓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D4</div>
    </td>
    <td>
        <div class="emoji-item">🏔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D5</div>
    </td>
    <td>
        <div class="emoji-item">🏕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D6</div>
    </td>
    <td>
        <div class="emoji-item">🏖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D7</div>
    </td>
    <td>
        <div class="emoji-item">🏗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D8</div>
    </td>
    <td>
        <div class="emoji-item">🏘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3D9</div>
    </td>
    <td>
        <div class="emoji-item">🏙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3DA</div>
    </td>
    <td>
        <div class="emoji-item">🏚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3DB</div>
    </td>
    <td>
        <div class="emoji-item">🏛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3DC</div>
    </td>
    <td>
        <div class="emoji-item">🏜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3DD</div>
    </td>
    <td>
        <div class="emoji-item">🏝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3DE</div>
    </td>
    <td>
        <div class="emoji-item">🏞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3DF</div>
    </td>
    <td>
        <div class="emoji-item">🏟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E0</div>
    </td>
    <td>
        <div class="emoji-item">🏠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E1</div>
    </td>
    <td>
        <div class="emoji-item">🏡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E2</div>
    </td>
    <td>
        <div class="emoji-item">🏢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E3</div>
    </td>
    <td>
        <div class="emoji-item">🏣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E4</div>
    </td>
    <td>
        <div class="emoji-item">🏤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E5</div>
    </td>
    <td>
        <div class="emoji-item">🏥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E6</div>
    </td>
    <td>
        <div class="emoji-item">🏦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E7</div>
    </td>
    <td>
        <div class="emoji-item">🏧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E8</div>
    </td>
    <td>
        <div class="emoji-item">🏨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3E9</div>
    </td>
    <td>
        <div class="emoji-item">🏩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3EA</div>
    </td>
    <td>
        <div class="emoji-item">🏪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3EB</div>
    </td>
    <td>
        <div class="emoji-item">🏫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3EC</div>
    </td>
    <td>
        <div class="emoji-item">🏬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3ED</div>
    </td>
    <td>
        <div class="emoji-item">🏭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3EE</div>
    </td>
    <td>
        <div class="emoji-item">🏮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3EF</div>
    </td>
    <td>
        <div class="emoji-item">🏯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F0</div>
    </td>
    <td>
        <div class="emoji-item">🏰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F1</div>
    </td>
    <td>
        <div class="emoji-item">🏱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F2</div>
    </td>
    <td>
        <div class="emoji-item">🏲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F3</div>
    </td>
    <td>
        <div class="emoji-item">🏳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F4</div>
    </td>
    <td>
        <div class="emoji-item">🏴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F5</div>
    </td>
    <td>
        <div class="emoji-item">🏵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F6</div>
    </td>
    <td>
        <div class="emoji-item">🏶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F7</div>
    </td>
    <td>
        <div class="emoji-item">🏷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F8</div>
    </td>
    <td>
        <div class="emoji-item">🏸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3F9</div>
    </td>
    <td>
        <div class="emoji-item">🏹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3FA</div>
    </td>
    <td>
        <div class="emoji-item">🏺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3FB</div>
    </td>
    <td>
        <div class="emoji-item">🏻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3FC</div>
    </td>
    <td>
        <div class="emoji-item">🏼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3FD</div>
    </td>
    <td>
        <div class="emoji-item">🏽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3FE</div>
    </td>
    <td>
        <div class="emoji-item">🏾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F3FF</div>
    </td>
    <td>
        <div class="emoji-item">🏿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F400</div>
    </td>
    <td>
        <div class="emoji-item">🐀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F401</div>
    </td>
    <td>
        <div class="emoji-item">🐁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F402</div>
    </td>
    <td>
        <div class="emoji-item">🐂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F403</div>
    </td>
    <td>
        <div class="emoji-item">🐃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F404</div>
    </td>
    <td>
        <div class="emoji-item">🐄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F405</div>
    </td>
    <td>
        <div class="emoji-item">🐅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F406</div>
    </td>
    <td>
        <div class="emoji-item">🐆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F407</div>
    </td>
    <td>
        <div class="emoji-item">🐇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F408</div>
    </td>
    <td>
        <div class="emoji-item">🐈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F409</div>
    </td>
    <td>
        <div class="emoji-item">🐉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F40A</div>
    </td>
    <td>
        <div class="emoji-item">🐊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F40B</div>
    </td>
    <td>
        <div class="emoji-item">🐋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F40C</div>
    </td>
    <td>
        <div class="emoji-item">🐌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F40D</div>
    </td>
    <td>
        <div class="emoji-item">🐍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F40E</div>
    </td>
    <td>
        <div class="emoji-item">🐎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F40F</div>
    </td>
    <td>
        <div class="emoji-item">🐏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F410</div>
    </td>
    <td>
        <div class="emoji-item">🐐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F411</div>
    </td>
    <td>
        <div class="emoji-item">🐑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F412</div>
    </td>
    <td>
        <div class="emoji-item">🐒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F413</div>
    </td>
    <td>
        <div class="emoji-item">🐓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F414</div>
    </td>
    <td>
        <div class="emoji-item">🐔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F415</div>
    </td>
    <td>
        <div class="emoji-item">🐕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F416</div>
    </td>
    <td>
        <div class="emoji-item">🐖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F417</div>
    </td>
    <td>
        <div class="emoji-item">🐗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F418</div>
    </td>
    <td>
        <div class="emoji-item">🐘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F419</div>
    </td>
    <td>
        <div class="emoji-item">🐙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F41A</div>
    </td>
    <td>
        <div class="emoji-item">🐚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F41B</div>
    </td>
    <td>
        <div class="emoji-item">🐛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F41C</div>
    </td>
    <td>
        <div class="emoji-item">🐜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F41D</div>
    </td>
    <td>
        <div class="emoji-item">🐝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F41E</div>
    </td>
    <td>
        <div class="emoji-item">🐞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F41F</div>
    </td>
    <td>
        <div class="emoji-item">🐟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F420</div>
    </td>
    <td>
        <div class="emoji-item">🐠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F421</div>
    </td>
    <td>
        <div class="emoji-item">🐡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F422</div>
    </td>
    <td>
        <div class="emoji-item">🐢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F423</div>
    </td>
    <td>
        <div class="emoji-item">🐣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F424</div>
    </td>
    <td>
        <div class="emoji-item">🐤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F425</div>
    </td>
    <td>
        <div class="emoji-item">🐥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F426</div>
    </td>
    <td>
        <div class="emoji-item">🐦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F427</div>
    </td>
    <td>
        <div class="emoji-item">🐧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F428</div>
    </td>
    <td>
        <div class="emoji-item">🐨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F429</div>
    </td>
    <td>
        <div class="emoji-item">🐩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F42A</div>
    </td>
    <td>
        <div class="emoji-item">🐪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F42B</div>
    </td>
    <td>
        <div class="emoji-item">🐫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F42C</div>
    </td>
    <td>
        <div class="emoji-item">🐬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F42D</div>
    </td>
    <td>
        <div class="emoji-item">🐭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F42E</div>
    </td>
    <td>
        <div class="emoji-item">🐮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F42F</div>
    </td>
    <td>
        <div class="emoji-item">🐯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F430</div>
    </td>
    <td>
        <div class="emoji-item">🐰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F431</div>
    </td>
    <td>
        <div class="emoji-item">🐱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F432</div>
    </td>
    <td>
        <div class="emoji-item">🐲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F433</div>
    </td>
    <td>
        <div class="emoji-item">🐳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F434</div>
    </td>
    <td>
        <div class="emoji-item">🐴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F435</div>
    </td>
    <td>
        <div class="emoji-item">🐵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F436</div>
    </td>
    <td>
        <div class="emoji-item">🐶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F437</div>
    </td>
    <td>
        <div class="emoji-item">🐷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F438</div>
    </td>
    <td>
        <div class="emoji-item">🐸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F439</div>
    </td>
    <td>
        <div class="emoji-item">🐹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F43A</div>
    </td>
    <td>
        <div class="emoji-item">🐺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F43B</div>
    </td>
    <td>
        <div class="emoji-item">🐻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F43C</div>
    </td>
    <td>
        <div class="emoji-item">🐼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F43D</div>
    </td>
    <td>
        <div class="emoji-item">🐽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F43E</div>
    </td>
    <td>
        <div class="emoji-item">🐾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F43F</div>
    </td>
    <td>
        <div class="emoji-item">🐿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F440</div>
    </td>
    <td>
        <div class="emoji-item">👀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F441</div>
    </td>
    <td>
        <div class="emoji-item">👁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F442</div>
    </td>
    <td>
        <div class="emoji-item">👂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F443</div>
    </td>
    <td>
        <div class="emoji-item">👃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F444</div>
    </td>
    <td>
        <div class="emoji-item">👄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F445</div>
    </td>
    <td>
        <div class="emoji-item">👅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F446</div>
    </td>
    <td>
        <div class="emoji-item">👆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F447</div>
    </td>
    <td>
        <div class="emoji-item">👇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F448</div>
    </td>
    <td>
        <div class="emoji-item">👈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F449</div>
    </td>
    <td>
        <div class="emoji-item">👉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F44A</div>
    </td>
    <td>
        <div class="emoji-item">👊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F44B</div>
    </td>
    <td>
        <div class="emoji-item">👋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F44C</div>
    </td>
    <td>
        <div class="emoji-item">👌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F44D</div>
    </td>
    <td>
        <div class="emoji-item">👍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F44E</div>
    </td>
    <td>
        <div class="emoji-item">👎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F44F</div>
    </td>
    <td>
        <div class="emoji-item">👏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F450</div>
    </td>
    <td>
        <div class="emoji-item">👐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F451</div>
    </td>
    <td>
        <div class="emoji-item">👑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F452</div>
    </td>
    <td>
        <div class="emoji-item">👒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F453</div>
    </td>
    <td>
        <div class="emoji-item">👓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F454</div>
    </td>
    <td>
        <div class="emoji-item">👔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F455</div>
    </td>
    <td>
        <div class="emoji-item">👕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F456</div>
    </td>
    <td>
        <div class="emoji-item">👖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F457</div>
    </td>
    <td>
        <div class="emoji-item">👗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F458</div>
    </td>
    <td>
        <div class="emoji-item">👘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F459</div>
    </td>
    <td>
        <div class="emoji-item">👙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F45A</div>
    </td>
    <td>
        <div class="emoji-item">👚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F45B</div>
    </td>
    <td>
        <div class="emoji-item">👛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F45C</div>
    </td>
    <td>
        <div class="emoji-item">👜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F45D</div>
    </td>
    <td>
        <div class="emoji-item">👝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F45E</div>
    </td>
    <td>
        <div class="emoji-item">👞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F45F</div>
    </td>
    <td>
        <div class="emoji-item">👟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F460</div>
    </td>
    <td>
        <div class="emoji-item">👠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F461</div>
    </td>
    <td>
        <div class="emoji-item">👡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F462</div>
    </td>
    <td>
        <div class="emoji-item">👢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F463</div>
    </td>
    <td>
        <div class="emoji-item">👣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F464</div>
    </td>
    <td>
        <div class="emoji-item">👤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F465</div>
    </td>
    <td>
        <div class="emoji-item">👥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F466</div>
    </td>
    <td>
        <div class="emoji-item">👦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F467</div>
    </td>
    <td>
        <div class="emoji-item">👧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F468</div>
    </td>
    <td>
        <div class="emoji-item">👨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F469</div>
    </td>
    <td>
        <div class="emoji-item">👩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F46A</div>
    </td>
    <td>
        <div class="emoji-item">👪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F46B</div>
    </td>
    <td>
        <div class="emoji-item">👫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F46C</div>
    </td>
    <td>
        <div class="emoji-item">👬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F46D</div>
    </td>
    <td>
        <div class="emoji-item">👭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F46E</div>
    </td>
    <td>
        <div class="emoji-item">👮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F46F</div>
    </td>
    <td>
        <div class="emoji-item">👯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F470</div>
    </td>
    <td>
        <div class="emoji-item">👰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F471</div>
    </td>
    <td>
        <div class="emoji-item">👱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F472</div>
    </td>
    <td>
        <div class="emoji-item">👲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F473</div>
    </td>
    <td>
        <div class="emoji-item">👳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F474</div>
    </td>
    <td>
        <div class="emoji-item">👴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F475</div>
    </td>
    <td>
        <div class="emoji-item">👵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F476</div>
    </td>
    <td>
        <div class="emoji-item">👶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F477</div>
    </td>
    <td>
        <div class="emoji-item">👷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F478</div>
    </td>
    <td>
        <div class="emoji-item">👸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F479</div>
    </td>
    <td>
        <div class="emoji-item">👹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F47A</div>
    </td>
    <td>
        <div class="emoji-item">👺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F47B</div>
    </td>
    <td>
        <div class="emoji-item">👻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F47C</div>
    </td>
    <td>
        <div class="emoji-item">👼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F47D</div>
    </td>
    <td>
        <div class="emoji-item">👽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F47E</div>
    </td>
    <td>
        <div class="emoji-item">👾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F47F</div>
    </td>
    <td>
        <div class="emoji-item">👿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F480</div>
    </td>
    <td>
        <div class="emoji-item">💀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F481</div>
    </td>
    <td>
        <div class="emoji-item">💁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F482</div>
    </td>
    <td>
        <div class="emoji-item">💂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F483</div>
    </td>
    <td>
        <div class="emoji-item">💃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F484</div>
    </td>
    <td>
        <div class="emoji-item">💄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F485</div>
    </td>
    <td>
        <div class="emoji-item">💅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F486</div>
    </td>
    <td>
        <div class="emoji-item">💆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F487</div>
    </td>
    <td>
        <div class="emoji-item">💇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F488</div>
    </td>
    <td>
        <div class="emoji-item">💈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F489</div>
    </td>
    <td>
        <div class="emoji-item">💉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F48A</div>
    </td>
    <td>
        <div class="emoji-item">💊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F48B</div>
    </td>
    <td>
        <div class="emoji-item">💋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F48C</div>
    </td>
    <td>
        <div class="emoji-item">💌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F48D</div>
    </td>
    <td>
        <div class="emoji-item">💍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F48E</div>
    </td>
    <td>
        <div class="emoji-item">💎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F48F</div>
    </td>
    <td>
        <div class="emoji-item">💏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F490</div>
    </td>
    <td>
        <div class="emoji-item">💐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F491</div>
    </td>
    <td>
        <div class="emoji-item">💑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F492</div>
    </td>
    <td>
        <div class="emoji-item">💒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F493</div>
    </td>
    <td>
        <div class="emoji-item">💓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F494</div>
    </td>
    <td>
        <div class="emoji-item">💔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F495</div>
    </td>
    <td>
        <div class="emoji-item">💕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F496</div>
    </td>
    <td>
        <div class="emoji-item">💖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F497</div>
    </td>
    <td>
        <div class="emoji-item">💗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F498</div>
    </td>
    <td>
        <div class="emoji-item">💘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F499</div>
    </td>
    <td>
        <div class="emoji-item">💙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F49A</div>
    </td>
    <td>
        <div class="emoji-item">💚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F49B</div>
    </td>
    <td>
        <div class="emoji-item">💛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F49C</div>
    </td>
    <td>
        <div class="emoji-item">💜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F49D</div>
    </td>
    <td>
        <div class="emoji-item">💝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F49E</div>
    </td>
    <td>
        <div class="emoji-item">💞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F49F</div>
    </td>
    <td>
        <div class="emoji-item">💟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A0</div>
    </td>
    <td>
        <div class="emoji-item">💠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A1</div>
    </td>
    <td>
        <div class="emoji-item">💡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A2</div>
    </td>
    <td>
        <div class="emoji-item">💢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A3</div>
    </td>
    <td>
        <div class="emoji-item">💣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A4</div>
    </td>
    <td>
        <div class="emoji-item">💤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A5</div>
    </td>
    <td>
        <div class="emoji-item">💥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A6</div>
    </td>
    <td>
        <div class="emoji-item">💦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A7</div>
    </td>
    <td>
        <div class="emoji-item">💧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A8</div>
    </td>
    <td>
        <div class="emoji-item">💨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4A9</div>
    </td>
    <td>
        <div class="emoji-item">💩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4AA</div>
    </td>
    <td>
        <div class="emoji-item">💪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4AB</div>
    </td>
    <td>
        <div class="emoji-item">💫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4AC</div>
    </td>
    <td>
        <div class="emoji-item">💬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4AD</div>
    </td>
    <td>
        <div class="emoji-item">💭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4AE</div>
    </td>
    <td>
        <div class="emoji-item">💮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4AF</div>
    </td>
    <td>
        <div class="emoji-item">💯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B0</div>
    </td>
    <td>
        <div class="emoji-item">💰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B1</div>
    </td>
    <td>
        <div class="emoji-item">💱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B2</div>
    </td>
    <td>
        <div class="emoji-item">💲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B3</div>
    </td>
    <td>
        <div class="emoji-item">💳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B4</div>
    </td>
    <td>
        <div class="emoji-item">💴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B5</div>
    </td>
    <td>
        <div class="emoji-item">💵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B6</div>
    </td>
    <td>
        <div class="emoji-item">💶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B7</div>
    </td>
    <td>
        <div class="emoji-item">💷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B8</div>
    </td>
    <td>
        <div class="emoji-item">💸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4B9</div>
    </td>
    <td>
        <div class="emoji-item">💹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4BA</div>
    </td>
    <td>
        <div class="emoji-item">💺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4BB</div>
    </td>
    <td>
        <div class="emoji-item">💻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4BC</div>
    </td>
    <td>
        <div class="emoji-item">💼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4BD</div>
    </td>
    <td>
        <div class="emoji-item">💽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4BE</div>
    </td>
    <td>
        <div class="emoji-item">💾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4BF</div>
    </td>
    <td>
        <div class="emoji-item">💿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C0</div>
    </td>
    <td>
        <div class="emoji-item">📀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C1</div>
    </td>
    <td>
        <div class="emoji-item">📁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C2</div>
    </td>
    <td>
        <div class="emoji-item">📂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C3</div>
    </td>
    <td>
        <div class="emoji-item">📃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C4</div>
    </td>
    <td>
        <div class="emoji-item">📄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C5</div>
    </td>
    <td>
        <div class="emoji-item">📅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C6</div>
    </td>
    <td>
        <div class="emoji-item">📆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C7</div>
    </td>
    <td>
        <div class="emoji-item">📇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C8</div>
    </td>
    <td>
        <div class="emoji-item">📈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4C9</div>
    </td>
    <td>
        <div class="emoji-item">📉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4CA</div>
    </td>
    <td>
        <div class="emoji-item">📊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4CB</div>
    </td>
    <td>
        <div class="emoji-item">📋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4CC</div>
    </td>
    <td>
        <div class="emoji-item">📌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4CD</div>
    </td>
    <td>
        <div class="emoji-item">📍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4CE</div>
    </td>
    <td>
        <div class="emoji-item">📎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4CF</div>
    </td>
    <td>
        <div class="emoji-item">📏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D0</div>
    </td>
    <td>
        <div class="emoji-item">📐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D1</div>
    </td>
    <td>
        <div class="emoji-item">📑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D2</div>
    </td>
    <td>
        <div class="emoji-item">📒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D3</div>
    </td>
    <td>
        <div class="emoji-item">📓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D4</div>
    </td>
    <td>
        <div class="emoji-item">📔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D5</div>
    </td>
    <td>
        <div class="emoji-item">📕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D6</div>
    </td>
    <td>
        <div class="emoji-item">📖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D7</div>
    </td>
    <td>
        <div class="emoji-item">📗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D8</div>
    </td>
    <td>
        <div class="emoji-item">📘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4D9</div>
    </td>
    <td>
        <div class="emoji-item">📙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4DA</div>
    </td>
    <td>
        <div class="emoji-item">📚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4DB</div>
    </td>
    <td>
        <div class="emoji-item">📛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4DC</div>
    </td>
    <td>
        <div class="emoji-item">📜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4DD</div>
    </td>
    <td>
        <div class="emoji-item">📝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4DE</div>
    </td>
    <td>
        <div class="emoji-item">📞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4DF</div>
    </td>
    <td>
        <div class="emoji-item">📟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E0</div>
    </td>
    <td>
        <div class="emoji-item">📠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E1</div>
    </td>
    <td>
        <div class="emoji-item">📡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E2</div>
    </td>
    <td>
        <div class="emoji-item">📢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E3</div>
    </td>
    <td>
        <div class="emoji-item">📣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E4</div>
    </td>
    <td>
        <div class="emoji-item">📤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E5</div>
    </td>
    <td>
        <div class="emoji-item">📥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E6</div>
    </td>
    <td>
        <div class="emoji-item">📦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E7</div>
    </td>
    <td>
        <div class="emoji-item">📧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E8</div>
    </td>
    <td>
        <div class="emoji-item">📨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4E9</div>
    </td>
    <td>
        <div class="emoji-item">📩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4EA</div>
    </td>
    <td>
        <div class="emoji-item">📪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4EB</div>
    </td>
    <td>
        <div class="emoji-item">📫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4EC</div>
    </td>
    <td>
        <div class="emoji-item">📬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4ED</div>
    </td>
    <td>
        <div class="emoji-item">📭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4EE</div>
    </td>
    <td>
        <div class="emoji-item">📮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4EF</div>
    </td>
    <td>
        <div class="emoji-item">📯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F0</div>
    </td>
    <td>
        <div class="emoji-item">📰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F1</div>
    </td>
    <td>
        <div class="emoji-item">📱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F2</div>
    </td>
    <td>
        <div class="emoji-item">📲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F3</div>
    </td>
    <td>
        <div class="emoji-item">📳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F4</div>
    </td>
    <td>
        <div class="emoji-item">📴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F5</div>
    </td>
    <td>
        <div class="emoji-item">📵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F6</div>
    </td>
    <td>
        <div class="emoji-item">📶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F7</div>
    </td>
    <td>
        <div class="emoji-item">📷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F8</div>
    </td>
    <td>
        <div class="emoji-item">📸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4F9</div>
    </td>
    <td>
        <div class="emoji-item">📹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4FA</div>
    </td>
    <td>
        <div class="emoji-item">📺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4FB</div>
    </td>
    <td>
        <div class="emoji-item">📻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4FC</div>
    </td>
    <td>
        <div class="emoji-item">📼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4FD</div>
    </td>
    <td>
        <div class="emoji-item">📽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4FE</div>
    </td>
    <td>
        <div class="emoji-item">📾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F4FF</div>
    </td>
    <td>
        <div class="emoji-item">📿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F500</div>
    </td>
    <td>
        <div class="emoji-item">🔀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F501</div>
    </td>
    <td>
        <div class="emoji-item">🔁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F502</div>
    </td>
    <td>
        <div class="emoji-item">🔂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F503</div>
    </td>
    <td>
        <div class="emoji-item">🔃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F504</div>
    </td>
    <td>
        <div class="emoji-item">🔄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F505</div>
    </td>
    <td>
        <div class="emoji-item">🔅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F506</div>
    </td>
    <td>
        <div class="emoji-item">🔆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F507</div>
    </td>
    <td>
        <div class="emoji-item">🔇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F508</div>
    </td>
    <td>
        <div class="emoji-item">🔈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F509</div>
    </td>
    <td>
        <div class="emoji-item">🔉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F50A</div>
    </td>
    <td>
        <div class="emoji-item">🔊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F50B</div>
    </td>
    <td>
        <div class="emoji-item">🔋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F50C</div>
    </td>
    <td>
        <div class="emoji-item">🔌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F50D</div>
    </td>
    <td>
        <div class="emoji-item">🔍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F50E</div>
    </td>
    <td>
        <div class="emoji-item">🔎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F50F</div>
    </td>
    <td>
        <div class="emoji-item">🔏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F510</div>
    </td>
    <td>
        <div class="emoji-item">🔐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F511</div>
    </td>
    <td>
        <div class="emoji-item">🔑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F512</div>
    </td>
    <td>
        <div class="emoji-item">🔒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F513</div>
    </td>
    <td>
        <div class="emoji-item">🔓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F514</div>
    </td>
    <td>
        <div class="emoji-item">🔔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F515</div>
    </td>
    <td>
        <div class="emoji-item">🔕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F516</div>
    </td>
    <td>
        <div class="emoji-item">🔖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F517</div>
    </td>
    <td>
        <div class="emoji-item">🔗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F518</div>
    </td>
    <td>
        <div class="emoji-item">🔘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F519</div>
    </td>
    <td>
        <div class="emoji-item">🔙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F51A</div>
    </td>
    <td>
        <div class="emoji-item">🔚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F51B</div>
    </td>
    <td>
        <div class="emoji-item">🔛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F51C</div>
    </td>
    <td>
        <div class="emoji-item">🔜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F51D</div>
    </td>
    <td>
        <div class="emoji-item">🔝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F51E</div>
    </td>
    <td>
        <div class="emoji-item">🔞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F51F</div>
    </td>
    <td>
        <div class="emoji-item">🔟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F520</div>
    </td>
    <td>
        <div class="emoji-item">🔠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F521</div>
    </td>
    <td>
        <div class="emoji-item">🔡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F522</div>
    </td>
    <td>
        <div class="emoji-item">🔢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F523</div>
    </td>
    <td>
        <div class="emoji-item">🔣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F524</div>
    </td>
    <td>
        <div class="emoji-item">🔤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F525</div>
    </td>
    <td>
        <div class="emoji-item">🔥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F526</div>
    </td>
    <td>
        <div class="emoji-item">🔦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F527</div>
    </td>
    <td>
        <div class="emoji-item">🔧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F528</div>
    </td>
    <td>
        <div class="emoji-item">🔨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F529</div>
    </td>
    <td>
        <div class="emoji-item">🔩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F52A</div>
    </td>
    <td>
        <div class="emoji-item">🔪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F52B</div>
    </td>
    <td>
        <div class="emoji-item">🔫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F52C</div>
    </td>
    <td>
        <div class="emoji-item">🔬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F52D</div>
    </td>
    <td>
        <div class="emoji-item">🔭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F52E</div>
    </td>
    <td>
        <div class="emoji-item">🔮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F52F</div>
    </td>
    <td>
        <div class="emoji-item">🔯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F530</div>
    </td>
    <td>
        <div class="emoji-item">🔰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F531</div>
    </td>
    <td>
        <div class="emoji-item">🔱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F532</div>
    </td>
    <td>
        <div class="emoji-item">🔲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F533</div>
    </td>
    <td>
        <div class="emoji-item">🔳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F534</div>
    </td>
    <td>
        <div class="emoji-item">🔴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F535</div>
    </td>
    <td>
        <div class="emoji-item">🔵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F536</div>
    </td>
    <td>
        <div class="emoji-item">🔶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F537</div>
    </td>
    <td>
        <div class="emoji-item">🔷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F538</div>
    </td>
    <td>
        <div class="emoji-item">🔸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F539</div>
    </td>
    <td>
        <div class="emoji-item">🔹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F53A</div>
    </td>
    <td>
        <div class="emoji-item">🔺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F53B</div>
    </td>
    <td>
        <div class="emoji-item">🔻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F53C</div>
    </td>
    <td>
        <div class="emoji-item">🔼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F53D</div>
    </td>
    <td>
        <div class="emoji-item">🔽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F53E</div>
    </td>
    <td>
        <div class="emoji-item">🔾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F53F</div>
    </td>
    <td>
        <div class="emoji-item">🔿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F540</div>
    </td>
    <td>
        <div class="emoji-item">🕀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F541</div>
    </td>
    <td>
        <div class="emoji-item">🕁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F542</div>
    </td>
    <td>
        <div class="emoji-item">🕂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F543</div>
    </td>
    <td>
        <div class="emoji-item">🕃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F544</div>
    </td>
    <td>
        <div class="emoji-item">🕄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F545</div>
    </td>
    <td>
        <div class="emoji-item">🕅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F546</div>
    </td>
    <td>
        <div class="emoji-item">🕆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F547</div>
    </td>
    <td>
        <div class="emoji-item">🕇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F548</div>
    </td>
    <td>
        <div class="emoji-item">🕈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F549</div>
    </td>
    <td>
        <div class="emoji-item">🕉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F54A</div>
    </td>
    <td>
        <div class="emoji-item">🕊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F54B</div>
    </td>
    <td>
        <div class="emoji-item">🕋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F54C</div>
    </td>
    <td>
        <div class="emoji-item">🕌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F54D</div>
    </td>
    <td>
        <div class="emoji-item">🕍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F54E</div>
    </td>
    <td>
        <div class="emoji-item">🕎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F54F</div>
    </td>
    <td>
        <div class="emoji-item">🕏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F550</div>
    </td>
    <td>
        <div class="emoji-item">🕐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F551</div>
    </td>
    <td>
        <div class="emoji-item">🕑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F552</div>
    </td>
    <td>
        <div class="emoji-item">🕒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F553</div>
    </td>
    <td>
        <div class="emoji-item">🕓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F554</div>
    </td>
    <td>
        <div class="emoji-item">🕔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F555</div>
    </td>
    <td>
        <div class="emoji-item">🕕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F556</div>
    </td>
    <td>
        <div class="emoji-item">🕖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F557</div>
    </td>
    <td>
        <div class="emoji-item">🕗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F558</div>
    </td>
    <td>
        <div class="emoji-item">🕘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F559</div>
    </td>
    <td>
        <div class="emoji-item">🕙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F55A</div>
    </td>
    <td>
        <div class="emoji-item">🕚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F55B</div>
    </td>
    <td>
        <div class="emoji-item">🕛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F55C</div>
    </td>
    <td>
        <div class="emoji-item">🕜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F55D</div>
    </td>
    <td>
        <div class="emoji-item">🕝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F55E</div>
    </td>
    <td>
        <div class="emoji-item">🕞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F55F</div>
    </td>
    <td>
        <div class="emoji-item">🕟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F560</div>
    </td>
    <td>
        <div class="emoji-item">🕠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F561</div>
    </td>
    <td>
        <div class="emoji-item">🕡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F562</div>
    </td>
    <td>
        <div class="emoji-item">🕢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F563</div>
    </td>
    <td>
        <div class="emoji-item">🕣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F564</div>
    </td>
    <td>
        <div class="emoji-item">🕤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F565</div>
    </td>
    <td>
        <div class="emoji-item">🕥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F566</div>
    </td>
    <td>
        <div class="emoji-item">🕦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F567</div>
    </td>
    <td>
        <div class="emoji-item">🕧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F568</div>
    </td>
    <td>
        <div class="emoji-item">🕨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F569</div>
    </td>
    <td>
        <div class="emoji-item">🕩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F56A</div>
    </td>
    <td>
        <div class="emoji-item">🕪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F56B</div>
    </td>
    <td>
        <div class="emoji-item">🕫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F56C</div>
    </td>
    <td>
        <div class="emoji-item">🕬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F56D</div>
    </td>
    <td>
        <div class="emoji-item">🕭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F56E</div>
    </td>
    <td>
        <div class="emoji-item">🕮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F56F</div>
    </td>
    <td>
        <div class="emoji-item">🕯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F570</div>
    </td>
    <td>
        <div class="emoji-item">🕰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F571</div>
    </td>
    <td>
        <div class="emoji-item">🕱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F572</div>
    </td>
    <td>
        <div class="emoji-item">🕲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F573</div>
    </td>
    <td>
        <div class="emoji-item">🕳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F574</div>
    </td>
    <td>
        <div class="emoji-item">🕴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F575</div>
    </td>
    <td>
        <div class="emoji-item">🕵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F576</div>
    </td>
    <td>
        <div class="emoji-item">🕶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F577</div>
    </td>
    <td>
        <div class="emoji-item">🕷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F578</div>
    </td>
    <td>
        <div class="emoji-item">🕸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F579</div>
    </td>
    <td>
        <div class="emoji-item">🕹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F57A</div>
    </td>
    <td>
        <div class="emoji-item">🕺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F57B</div>
    </td>
    <td>
        <div class="emoji-item">🕻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F57C</div>
    </td>
    <td>
        <div class="emoji-item">🕼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F57D</div>
    </td>
    <td>
        <div class="emoji-item">🕽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F57E</div>
    </td>
    <td>
        <div class="emoji-item">🕾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F57F</div>
    </td>
    <td>
        <div class="emoji-item">🕿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F580</div>
    </td>
    <td>
        <div class="emoji-item">🖀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F581</div>
    </td>
    <td>
        <div class="emoji-item">🖁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F582</div>
    </td>
    <td>
        <div class="emoji-item">🖂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F583</div>
    </td>
    <td>
        <div class="emoji-item">🖃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F584</div>
    </td>
    <td>
        <div class="emoji-item">🖄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F585</div>
    </td>
    <td>
        <div class="emoji-item">🖅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F586</div>
    </td>
    <td>
        <div class="emoji-item">🖆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F587</div>
    </td>
    <td>
        <div class="emoji-item">🖇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F588</div>
    </td>
    <td>
        <div class="emoji-item">🖈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F589</div>
    </td>
    <td>
        <div class="emoji-item">🖉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F58A</div>
    </td>
    <td>
        <div class="emoji-item">🖊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F58B</div>
    </td>
    <td>
        <div class="emoji-item">🖋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F58C</div>
    </td>
    <td>
        <div class="emoji-item">🖌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F58D</div>
    </td>
    <td>
        <div class="emoji-item">🖍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F58E</div>
    </td>
    <td>
        <div class="emoji-item">🖎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F58F</div>
    </td>
    <td>
        <div class="emoji-item">🖏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F590</div>
    </td>
    <td>
        <div class="emoji-item">🖐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F591</div>
    </td>
    <td>
        <div class="emoji-item">🖑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F592</div>
    </td>
    <td>
        <div class="emoji-item">🖒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F593</div>
    </td>
    <td>
        <div class="emoji-item">🖓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F594</div>
    </td>
    <td>
        <div class="emoji-item">🖔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F595</div>
    </td>
    <td>
        <div class="emoji-item">🖕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F596</div>
    </td>
    <td>
        <div class="emoji-item">🖖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F597</div>
    </td>
    <td>
        <div class="emoji-item">🖗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F598</div>
    </td>
    <td>
        <div class="emoji-item">🖘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F599</div>
    </td>
    <td>
        <div class="emoji-item">🖙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F59A</div>
    </td>
    <td>
        <div class="emoji-item">🖚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F59B</div>
    </td>
    <td>
        <div class="emoji-item">🖛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F59C</div>
    </td>
    <td>
        <div class="emoji-item">🖜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F59D</div>
    </td>
    <td>
        <div class="emoji-item">🖝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F59E</div>
    </td>
    <td>
        <div class="emoji-item">🖞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F59F</div>
    </td>
    <td>
        <div class="emoji-item">🖟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A0</div>
    </td>
    <td>
        <div class="emoji-item">🖠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A1</div>
    </td>
    <td>
        <div class="emoji-item">🖡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A2</div>
    </td>
    <td>
        <div class="emoji-item">🖢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A3</div>
    </td>
    <td>
        <div class="emoji-item">🖣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A4</div>
    </td>
    <td>
        <div class="emoji-item">🖤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A5</div>
    </td>
    <td>
        <div class="emoji-item">🖥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A6</div>
    </td>
    <td>
        <div class="emoji-item">🖦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A7</div>
    </td>
    <td>
        <div class="emoji-item">🖧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A8</div>
    </td>
    <td>
        <div class="emoji-item">🖨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5A9</div>
    </td>
    <td>
        <div class="emoji-item">🖩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5AA</div>
    </td>
    <td>
        <div class="emoji-item">🖪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5AB</div>
    </td>
    <td>
        <div class="emoji-item">🖫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5AC</div>
    </td>
    <td>
        <div class="emoji-item">🖬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5AD</div>
    </td>
    <td>
        <div class="emoji-item">🖭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5AE</div>
    </td>
    <td>
        <div class="emoji-item">🖮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5AF</div>
    </td>
    <td>
        <div class="emoji-item">🖯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B0</div>
    </td>
    <td>
        <div class="emoji-item">🖰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B1</div>
    </td>
    <td>
        <div class="emoji-item">🖱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B2</div>
    </td>
    <td>
        <div class="emoji-item">🖲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B3</div>
    </td>
    <td>
        <div class="emoji-item">🖳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B4</div>
    </td>
    <td>
        <div class="emoji-item">🖴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B5</div>
    </td>
    <td>
        <div class="emoji-item">🖵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B6</div>
    </td>
    <td>
        <div class="emoji-item">🖶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B7</div>
    </td>
    <td>
        <div class="emoji-item">🖷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B8</div>
    </td>
    <td>
        <div class="emoji-item">🖸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5B9</div>
    </td>
    <td>
        <div class="emoji-item">🖹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5BA</div>
    </td>
    <td>
        <div class="emoji-item">🖺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5BB</div>
    </td>
    <td>
        <div class="emoji-item">🖻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5BC</div>
    </td>
    <td>
        <div class="emoji-item">🖼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5BD</div>
    </td>
    <td>
        <div class="emoji-item">🖽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5BE</div>
    </td>
    <td>
        <div class="emoji-item">🖾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5BF</div>
    </td>
    <td>
        <div class="emoji-item">🖿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C0</div>
    </td>
    <td>
        <div class="emoji-item">🗀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C1</div>
    </td>
    <td>
        <div class="emoji-item">🗁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C2</div>
    </td>
    <td>
        <div class="emoji-item">🗂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C3</div>
    </td>
    <td>
        <div class="emoji-item">🗃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C4</div>
    </td>
    <td>
        <div class="emoji-item">🗄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C5</div>
    </td>
    <td>
        <div class="emoji-item">🗅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C6</div>
    </td>
    <td>
        <div class="emoji-item">🗆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C7</div>
    </td>
    <td>
        <div class="emoji-item">🗇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C8</div>
    </td>
    <td>
        <div class="emoji-item">🗈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5C9</div>
    </td>
    <td>
        <div class="emoji-item">🗉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5CA</div>
    </td>
    <td>
        <div class="emoji-item">🗊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5CB</div>
    </td>
    <td>
        <div class="emoji-item">🗋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5CC</div>
    </td>
    <td>
        <div class="emoji-item">🗌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5CD</div>
    </td>
    <td>
        <div class="emoji-item">🗍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5CE</div>
    </td>
    <td>
        <div class="emoji-item">🗎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5CF</div>
    </td>
    <td>
        <div class="emoji-item">🗏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D0</div>
    </td>
    <td>
        <div class="emoji-item">🗐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D1</div>
    </td>
    <td>
        <div class="emoji-item">🗑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D2</div>
    </td>
    <td>
        <div class="emoji-item">🗒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D3</div>
    </td>
    <td>
        <div class="emoji-item">🗓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D4</div>
    </td>
    <td>
        <div class="emoji-item">🗔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D5</div>
    </td>
    <td>
        <div class="emoji-item">🗕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D6</div>
    </td>
    <td>
        <div class="emoji-item">🗖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D7</div>
    </td>
    <td>
        <div class="emoji-item">🗗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D8</div>
    </td>
    <td>
        <div class="emoji-item">🗘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5D9</div>
    </td>
    <td>
        <div class="emoji-item">🗙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5DA</div>
    </td>
    <td>
        <div class="emoji-item">🗚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5DB</div>
    </td>
    <td>
        <div class="emoji-item">🗛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5DC</div>
    </td>
    <td>
        <div class="emoji-item">🗜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5DD</div>
    </td>
    <td>
        <div class="emoji-item">🗝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5DE</div>
    </td>
    <td>
        <div class="emoji-item">🗞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5DF</div>
    </td>
    <td>
        <div class="emoji-item">🗟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E0</div>
    </td>
    <td>
        <div class="emoji-item">🗠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E1</div>
    </td>
    <td>
        <div class="emoji-item">🗡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E2</div>
    </td>
    <td>
        <div class="emoji-item">🗢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E3</div>
    </td>
    <td>
        <div class="emoji-item">🗣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E4</div>
    </td>
    <td>
        <div class="emoji-item">🗤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E5</div>
    </td>
    <td>
        <div class="emoji-item">🗥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E6</div>
    </td>
    <td>
        <div class="emoji-item">🗦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E7</div>
    </td>
    <td>
        <div class="emoji-item">🗧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E8</div>
    </td>
    <td>
        <div class="emoji-item">🗨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5E9</div>
    </td>
    <td>
        <div class="emoji-item">🗩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5EA</div>
    </td>
    <td>
        <div class="emoji-item">🗪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5EB</div>
    </td>
    <td>
        <div class="emoji-item">🗫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5EC</div>
    </td>
    <td>
        <div class="emoji-item">🗬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5ED</div>
    </td>
    <td>
        <div class="emoji-item">🗭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5EE</div>
    </td>
    <td>
        <div class="emoji-item">🗮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5EF</div>
    </td>
    <td>
        <div class="emoji-item">🗯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F0</div>
    </td>
    <td>
        <div class="emoji-item">🗰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F1</div>
    </td>
    <td>
        <div class="emoji-item">🗱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F2</div>
    </td>
    <td>
        <div class="emoji-item">🗲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F3</div>
    </td>
    <td>
        <div class="emoji-item">🗳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F4</div>
    </td>
    <td>
        <div class="emoji-item">🗴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F5</div>
    </td>
    <td>
        <div class="emoji-item">🗵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F6</div>
    </td>
    <td>
        <div class="emoji-item">🗶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F7</div>
    </td>
    <td>
        <div class="emoji-item">🗷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F8</div>
    </td>
    <td>
        <div class="emoji-item">🗸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5F9</div>
    </td>
    <td>
        <div class="emoji-item">🗹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5FA</div>
    </td>
    <td>
        <div class="emoji-item">🗺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5FB</div>
    </td>
    <td>
        <div class="emoji-item">🗻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5FC</div>
    </td>
    <td>
        <div class="emoji-item">🗼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5FD</div>
    </td>
    <td>
        <div class="emoji-item">🗽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5FE</div>
    </td>
    <td>
        <div class="emoji-item">🗾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F5FF</div>
    </td>
    <td>
        <div class="emoji-item">🗿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F680</div>
    </td>
    <td>
        <div class="emoji-item">🚀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F681</div>
    </td>
    <td>
        <div class="emoji-item">🚁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F682</div>
    </td>
    <td>
        <div class="emoji-item">🚂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F683</div>
    </td>
    <td>
        <div class="emoji-item">🚃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F684</div>
    </td>
    <td>
        <div class="emoji-item">🚄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F685</div>
    </td>
    <td>
        <div class="emoji-item">🚅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F686</div>
    </td>
    <td>
        <div class="emoji-item">🚆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F687</div>
    </td>
    <td>
        <div class="emoji-item">🚇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F688</div>
    </td>
    <td>
        <div class="emoji-item">🚈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F689</div>
    </td>
    <td>
        <div class="emoji-item">🚉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F68A</div>
    </td>
    <td>
        <div class="emoji-item">🚊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F68B</div>
    </td>
    <td>
        <div class="emoji-item">🚋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F68C</div>
    </td>
    <td>
        <div class="emoji-item">🚌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F68D</div>
    </td>
    <td>
        <div class="emoji-item">🚍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F68E</div>
    </td>
    <td>
        <div class="emoji-item">🚎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F68F</div>
    </td>
    <td>
        <div class="emoji-item">🚏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F690</div>
    </td>
    <td>
        <div class="emoji-item">🚐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F691</div>
    </td>
    <td>
        <div class="emoji-item">🚑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F692</div>
    </td>
    <td>
        <div class="emoji-item">🚒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F693</div>
    </td>
    <td>
        <div class="emoji-item">🚓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F694</div>
    </td>
    <td>
        <div class="emoji-item">🚔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F695</div>
    </td>
    <td>
        <div class="emoji-item">🚕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F696</div>
    </td>
    <td>
        <div class="emoji-item">🚖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F697</div>
    </td>
    <td>
        <div class="emoji-item">🚗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F698</div>
    </td>
    <td>
        <div class="emoji-item">🚘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F699</div>
    </td>
    <td>
        <div class="emoji-item">🚙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F69A</div>
    </td>
    <td>
        <div class="emoji-item">🚚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F69B</div>
    </td>
    <td>
        <div class="emoji-item">🚛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F69C</div>
    </td>
    <td>
        <div class="emoji-item">🚜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F69D</div>
    </td>
    <td>
        <div class="emoji-item">🚝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F69E</div>
    </td>
    <td>
        <div class="emoji-item">🚞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F69F</div>
    </td>
    <td>
        <div class="emoji-item">🚟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A0</div>
    </td>
    <td>
        <div class="emoji-item">🚠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A1</div>
    </td>
    <td>
        <div class="emoji-item">🚡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A2</div>
    </td>
    <td>
        <div class="emoji-item">🚢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A3</div>
    </td>
    <td>
        <div class="emoji-item">🚣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A4</div>
    </td>
    <td>
        <div class="emoji-item">🚤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A5</div>
    </td>
    <td>
        <div class="emoji-item">🚥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A6</div>
    </td>
    <td>
        <div class="emoji-item">🚦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A7</div>
    </td>
    <td>
        <div class="emoji-item">🚧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A8</div>
    </td>
    <td>
        <div class="emoji-item">🚨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6A9</div>
    </td>
    <td>
        <div class="emoji-item">🚩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6AA</div>
    </td>
    <td>
        <div class="emoji-item">🚪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6AB</div>
    </td>
    <td>
        <div class="emoji-item">🚫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6AC</div>
    </td>
    <td>
        <div class="emoji-item">🚬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6AD</div>
    </td>
    <td>
        <div class="emoji-item">🚭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6AE</div>
    </td>
    <td>
        <div class="emoji-item">🚮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6AF</div>
    </td>
    <td>
        <div class="emoji-item">🚯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B0</div>
    </td>
    <td>
        <div class="emoji-item">🚰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B1</div>
    </td>
    <td>
        <div class="emoji-item">🚱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B2</div>
    </td>
    <td>
        <div class="emoji-item">🚲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B3</div>
    </td>
    <td>
        <div class="emoji-item">🚳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B4</div>
    </td>
    <td>
        <div class="emoji-item">🚴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B5</div>
    </td>
    <td>
        <div class="emoji-item">🚵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B6</div>
    </td>
    <td>
        <div class="emoji-item">🚶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B7</div>
    </td>
    <td>
        <div class="emoji-item">🚷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B8</div>
    </td>
    <td>
        <div class="emoji-item">🚸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6B9</div>
    </td>
    <td>
        <div class="emoji-item">🚹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6BA</div>
    </td>
    <td>
        <div class="emoji-item">🚺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6BB</div>
    </td>
    <td>
        <div class="emoji-item">🚻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6BC</div>
    </td>
    <td>
        <div class="emoji-item">🚼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6BD</div>
    </td>
    <td>
        <div class="emoji-item">🚽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6BE</div>
    </td>
    <td>
        <div class="emoji-item">🚾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6BF</div>
    </td>
    <td>
        <div class="emoji-item">🚿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C0</div>
    </td>
    <td>
        <div class="emoji-item">🛀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C1</div>
    </td>
    <td>
        <div class="emoji-item">🛁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C2</div>
    </td>
    <td>
        <div class="emoji-item">🛂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C3</div>
    </td>
    <td>
        <div class="emoji-item">🛃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C4</div>
    </td>
    <td>
        <div class="emoji-item">🛄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C5</div>
    </td>
    <td>
        <div class="emoji-item">🛅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C6</div>
    </td>
    <td>
        <div class="emoji-item">🛆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C7</div>
    </td>
    <td>
        <div class="emoji-item">🛇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C8</div>
    </td>
    <td>
        <div class="emoji-item">🛈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6C9</div>
    </td>
    <td>
        <div class="emoji-item">🛉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6CA</div>
    </td>
    <td>
        <div class="emoji-item">🛊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6CB</div>
    </td>
    <td>
        <div class="emoji-item">🛋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6CC</div>
    </td>
    <td>
        <div class="emoji-item">🛌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6CD</div>
    </td>
    <td>
        <div class="emoji-item">🛍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6CE</div>
    </td>
    <td>
        <div class="emoji-item">🛎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6CF</div>
    </td>
    <td>
        <div class="emoji-item">🛏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D0</div>
    </td>
    <td>
        <div class="emoji-item">🛐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D1</div>
    </td>
    <td>
        <div class="emoji-item">🛑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D2</div>
    </td>
    <td>
        <div class="emoji-item">🛒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D3</div>
    </td>
    <td>
        <div class="emoji-item">🛓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D4</div>
    </td>
    <td>
        <div class="emoji-item">🛔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D5</div>
    </td>
    <td>
        <div class="emoji-item">🛕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D6</div>
    </td>
    <td>
        <div class="emoji-item">🛖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D7</div>
    </td>
    <td>
        <div class="emoji-item">🛗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D8</div>
    </td>
    <td>
        <div class="emoji-item">🛘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6D9</div>
    </td>
    <td>
        <div class="emoji-item">🛙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6DA</div>
    </td>
    <td>
        <div class="emoji-item">🛚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6DB</div>
    </td>
    <td>
        <div class="emoji-item">🛛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6DC</div>
    </td>
    <td>
        <div class="emoji-item">🛜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6DD</div>
    </td>
    <td>
        <div class="emoji-item">🛝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6DE</div>
    </td>
    <td>
        <div class="emoji-item">🛞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6DF</div>
    </td>
    <td>
        <div class="emoji-item">🛟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E0</div>
    </td>
    <td>
        <div class="emoji-item">🛠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E1</div>
    </td>
    <td>
        <div class="emoji-item">🛡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E2</div>
    </td>
    <td>
        <div class="emoji-item">🛢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E3</div>
    </td>
    <td>
        <div class="emoji-item">🛣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E4</div>
    </td>
    <td>
        <div class="emoji-item">🛤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E5</div>
    </td>
    <td>
        <div class="emoji-item">🛥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E6</div>
    </td>
    <td>
        <div class="emoji-item">🛦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E7</div>
    </td>
    <td>
        <div class="emoji-item">🛧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E8</div>
    </td>
    <td>
        <div class="emoji-item">🛨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6E9</div>
    </td>
    <td>
        <div class="emoji-item">🛩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6EA</div>
    </td>
    <td>
        <div class="emoji-item">🛪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6EB</div>
    </td>
    <td>
        <div class="emoji-item">🛫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6EC</div>
    </td>
    <td>
        <div class="emoji-item">🛬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6ED</div>
    </td>
    <td>
        <div class="emoji-item">🛭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6EE</div>
    </td>
    <td>
        <div class="emoji-item">🛮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6EF</div>
    </td>
    <td>
        <div class="emoji-item">🛯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F0</div>
    </td>
    <td>
        <div class="emoji-item">🛰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F1</div>
    </td>
    <td>
        <div class="emoji-item">🛱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F2</div>
    </td>
    <td>
        <div class="emoji-item">🛲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F3</div>
    </td>
    <td>
        <div class="emoji-item">🛳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F4</div>
    </td>
    <td>
        <div class="emoji-item">🛴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F5</div>
    </td>
    <td>
        <div class="emoji-item">🛵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F6</div>
    </td>
    <td>
        <div class="emoji-item">🛶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F7</div>
    </td>
    <td>
        <div class="emoji-item">🛷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F8</div>
    </td>
    <td>
        <div class="emoji-item">🛸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6F9</div>
    </td>
    <td>
        <div class="emoji-item">🛹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6FA</div>
    </td>
    <td>
        <div class="emoji-item">🛺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6FB</div>
    </td>
    <td>
        <div class="emoji-item">🛻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6FC</div>
    </td>
    <td>
        <div class="emoji-item">🛼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6FD</div>
    </td>
    <td>
        <div class="emoji-item">🛽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6FE</div>
    </td>
    <td>
        <div class="emoji-item">🛾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F6FF</div>
    </td>
    <td>
        <div class="emoji-item">🛿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2600</div>
    </td>
    <td>
        <div class="emoji-item">☀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2601</div>
    </td>
    <td>
        <div class="emoji-item">☁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2602</div>
    </td>
    <td>
        <div class="emoji-item">☂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2603</div>
    </td>
    <td>
        <div class="emoji-item">☃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2604</div>
    </td>
    <td>
        <div class="emoji-item">☄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2605</div>
    </td>
    <td>
        <div class="emoji-item">★</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2606</div>
    </td>
    <td>
        <div class="emoji-item">☆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2607</div>
    </td>
    <td>
        <div class="emoji-item">☇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2608</div>
    </td>
    <td>
        <div class="emoji-item">☈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2609</div>
    </td>
    <td>
        <div class="emoji-item">☉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+260A</div>
    </td>
    <td>
        <div class="emoji-item">☊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+260B</div>
    </td>
    <td>
        <div class="emoji-item">☋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+260C</div>
    </td>
    <td>
        <div class="emoji-item">☌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+260D</div>
    </td>
    <td>
        <div class="emoji-item">☍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+260E</div>
    </td>
    <td>
        <div class="emoji-item">☎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+260F</div>
    </td>
    <td>
        <div class="emoji-item">☏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2610</div>
    </td>
    <td>
        <div class="emoji-item">☐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2611</div>
    </td>
    <td>
        <div class="emoji-item">☑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2612</div>
    </td>
    <td>
        <div class="emoji-item">☒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2613</div>
    </td>
    <td>
        <div class="emoji-item">☓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2614</div>
    </td>
    <td>
        <div class="emoji-item">☔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2615</div>
    </td>
    <td>
        <div class="emoji-item">☕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2616</div>
    </td>
    <td>
        <div class="emoji-item">☖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2617</div>
    </td>
    <td>
        <div class="emoji-item">☗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2618</div>
    </td>
    <td>
        <div class="emoji-item">☘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2619</div>
    </td>
    <td>
        <div class="emoji-item">☙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+261A</div>
    </td>
    <td>
        <div class="emoji-item">☚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+261B</div>
    </td>
    <td>
        <div class="emoji-item">☛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+261C</div>
    </td>
    <td>
        <div class="emoji-item">☜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+261D</div>
    </td>
    <td>
        <div class="emoji-item">☝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+261E</div>
    </td>
    <td>
        <div class="emoji-item">☞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+261F</div>
    </td>
    <td>
        <div class="emoji-item">☟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2620</div>
    </td>
    <td>
        <div class="emoji-item">☠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2621</div>
    </td>
    <td>
        <div class="emoji-item">☡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2622</div>
    </td>
    <td>
        <div class="emoji-item">☢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2623</div>
    </td>
    <td>
        <div class="emoji-item">☣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2624</div>
    </td>
    <td>
        <div class="emoji-item">☤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2625</div>
    </td>
    <td>
        <div class="emoji-item">☥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2626</div>
    </td>
    <td>
        <div class="emoji-item">☦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2627</div>
    </td>
    <td>
        <div class="emoji-item">☧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2628</div>
    </td>
    <td>
        <div class="emoji-item">☨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2629</div>
    </td>
    <td>
        <div class="emoji-item">☩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+262A</div>
    </td>
    <td>
        <div class="emoji-item">☪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+262B</div>
    </td>
    <td>
        <div class="emoji-item">☫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+262C</div>
    </td>
    <td>
        <div class="emoji-item">☬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+262D</div>
    </td>
    <td>
        <div class="emoji-item">☭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+262E</div>
    </td>
    <td>
        <div class="emoji-item">☮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+262F</div>
    </td>
    <td>
        <div class="emoji-item">☯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2630</div>
    </td>
    <td>
        <div class="emoji-item">☰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2631</div>
    </td>
    <td>
        <div class="emoji-item">☱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2632</div>
    </td>
    <td>
        <div class="emoji-item">☲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2633</div>
    </td>
    <td>
        <div class="emoji-item">☳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2634</div>
    </td>
    <td>
        <div class="emoji-item">☴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2635</div>
    </td>
    <td>
        <div class="emoji-item">☵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2636</div>
    </td>
    <td>
        <div class="emoji-item">☶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2637</div>
    </td>
    <td>
        <div class="emoji-item">☷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2638</div>
    </td>
    <td>
        <div class="emoji-item">☸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2639</div>
    </td>
    <td>
        <div class="emoji-item">☹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+263A</div>
    </td>
    <td>
        <div class="emoji-item">☺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+263B</div>
    </td>
    <td>
        <div class="emoji-item">☻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+263C</div>
    </td>
    <td>
        <div class="emoji-item">☼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+263D</div>
    </td>
    <td>
        <div class="emoji-item">☽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+263E</div>
    </td>
    <td>
        <div class="emoji-item">☾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+263F</div>
    </td>
    <td>
        <div class="emoji-item">☿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2640</div>
    </td>
    <td>
        <div class="emoji-item">♀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2641</div>
    </td>
    <td>
        <div class="emoji-item">♁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2642</div>
    </td>
    <td>
        <div class="emoji-item">♂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2643</div>
    </td>
    <td>
        <div class="emoji-item">♃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2644</div>
    </td>
    <td>
        <div class="emoji-item">♄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2645</div>
    </td>
    <td>
        <div class="emoji-item">♅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2646</div>
    </td>
    <td>
        <div class="emoji-item">♆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2647</div>
    </td>
    <td>
        <div class="emoji-item">♇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2648</div>
    </td>
    <td>
        <div class="emoji-item">♈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2649</div>
    </td>
    <td>
        <div class="emoji-item">♉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+264A</div>
    </td>
    <td>
        <div class="emoji-item">♊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+264B</div>
    </td>
    <td>
        <div class="emoji-item">♋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+264C</div>
    </td>
    <td>
        <div class="emoji-item">♌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+264D</div>
    </td>
    <td>
        <div class="emoji-item">♍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+264E</div>
    </td>
    <td>
        <div class="emoji-item">♎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+264F</div>
    </td>
    <td>
        <div class="emoji-item">♏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2650</div>
    </td>
    <td>
        <div class="emoji-item">♐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2651</div>
    </td>
    <td>
        <div class="emoji-item">♑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2652</div>
    </td>
    <td>
        <div class="emoji-item">♒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2653</div>
    </td>
    <td>
        <div class="emoji-item">♓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2654</div>
    </td>
    <td>
        <div class="emoji-item">♔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2655</div>
    </td>
    <td>
        <div class="emoji-item">♕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2656</div>
    </td>
    <td>
        <div class="emoji-item">♖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2657</div>
    </td>
    <td>
        <div class="emoji-item">♗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2658</div>
    </td>
    <td>
        <div class="emoji-item">♘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2659</div>
    </td>
    <td>
        <div class="emoji-item">♙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+265A</div>
    </td>
    <td>
        <div class="emoji-item">♚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+265B</div>
    </td>
    <td>
        <div class="emoji-item">♛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+265C</div>
    </td>
    <td>
        <div class="emoji-item">♜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+265D</div>
    </td>
    <td>
        <div class="emoji-item">♝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+265E</div>
    </td>
    <td>
        <div class="emoji-item">♞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+265F</div>
    </td>
    <td>
        <div class="emoji-item">♟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2660</div>
    </td>
    <td>
        <div class="emoji-item">♠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2661</div>
    </td>
    <td>
        <div class="emoji-item">♡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2662</div>
    </td>
    <td>
        <div class="emoji-item">♢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2663</div>
    </td>
    <td>
        <div class="emoji-item">♣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2664</div>
    </td>
    <td>
        <div class="emoji-item">♤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2665</div>
    </td>
    <td>
        <div class="emoji-item">♥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2666</div>
    </td>
    <td>
        <div class="emoji-item">♦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2667</div>
    </td>
    <td>
        <div class="emoji-item">♧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2668</div>
    </td>
    <td>
        <div class="emoji-item">♨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2669</div>
    </td>
    <td>
        <div class="emoji-item">♩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+266A</div>
    </td>
    <td>
        <div class="emoji-item">♪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+266B</div>
    </td>
    <td>
        <div class="emoji-item">♫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+266C</div>
    </td>
    <td>
        <div class="emoji-item">♬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+266D</div>
    </td>
    <td>
        <div class="emoji-item">♭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+266E</div>
    </td>
    <td>
        <div class="emoji-item">♮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+266F</div>
    </td>
    <td>
        <div class="emoji-item">♯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2670</div>
    </td>
    <td>
        <div class="emoji-item">♰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2671</div>
    </td>
    <td>
        <div class="emoji-item">♱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2672</div>
    </td>
    <td>
        <div class="emoji-item">♲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2673</div>
    </td>
    <td>
        <div class="emoji-item">♳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2674</div>
    </td>
    <td>
        <div class="emoji-item">♴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2675</div>
    </td>
    <td>
        <div class="emoji-item">♵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2676</div>
    </td>
    <td>
        <div class="emoji-item">♶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2677</div>
    </td>
    <td>
        <div class="emoji-item">♷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2678</div>
    </td>
    <td>
        <div class="emoji-item">♸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2679</div>
    </td>
    <td>
        <div class="emoji-item">♹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+267A</div>
    </td>
    <td>
        <div class="emoji-item">♺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+267B</div>
    </td>
    <td>
        <div class="emoji-item">♻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+267C</div>
    </td>
    <td>
        <div class="emoji-item">♼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+267D</div>
    </td>
    <td>
        <div class="emoji-item">♽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+267E</div>
    </td>
    <td>
        <div class="emoji-item">♾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+267F</div>
    </td>
    <td>
        <div class="emoji-item">♿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2680</div>
    </td>
    <td>
        <div class="emoji-item">⚀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2681</div>
    </td>
    <td>
        <div class="emoji-item">⚁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2682</div>
    </td>
    <td>
        <div class="emoji-item">⚂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2683</div>
    </td>
    <td>
        <div class="emoji-item">⚃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2684</div>
    </td>
    <td>
        <div class="emoji-item">⚄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2685</div>
    </td>
    <td>
        <div class="emoji-item">⚅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2686</div>
    </td>
    <td>
        <div class="emoji-item">⚆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2687</div>
    </td>
    <td>
        <div class="emoji-item">⚇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2688</div>
    </td>
    <td>
        <div class="emoji-item">⚈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2689</div>
    </td>
    <td>
        <div class="emoji-item">⚉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+268A</div>
    </td>
    <td>
        <div class="emoji-item">⚊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+268B</div>
    </td>
    <td>
        <div class="emoji-item">⚋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+268C</div>
    </td>
    <td>
        <div class="emoji-item">⚌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+268D</div>
    </td>
    <td>
        <div class="emoji-item">⚍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+268E</div>
    </td>
    <td>
        <div class="emoji-item">⚎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+268F</div>
    </td>
    <td>
        <div class="emoji-item">⚏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2690</div>
    </td>
    <td>
        <div class="emoji-item">⚐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2691</div>
    </td>
    <td>
        <div class="emoji-item">⚑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2692</div>
    </td>
    <td>
        <div class="emoji-item">⚒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2693</div>
    </td>
    <td>
        <div class="emoji-item">⚓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2694</div>
    </td>
    <td>
        <div class="emoji-item">⚔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2695</div>
    </td>
    <td>
        <div class="emoji-item">⚕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2696</div>
    </td>
    <td>
        <div class="emoji-item">⚖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2697</div>
    </td>
    <td>
        <div class="emoji-item">⚗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2698</div>
    </td>
    <td>
        <div class="emoji-item">⚘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2699</div>
    </td>
    <td>
        <div class="emoji-item">⚙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+269A</div>
    </td>
    <td>
        <div class="emoji-item">⚚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+269B</div>
    </td>
    <td>
        <div class="emoji-item">⚛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+269C</div>
    </td>
    <td>
        <div class="emoji-item">⚜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+269D</div>
    </td>
    <td>
        <div class="emoji-item">⚝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+269E</div>
    </td>
    <td>
        <div class="emoji-item">⚞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+269F</div>
    </td>
    <td>
        <div class="emoji-item">⚟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A0</div>
    </td>
    <td>
        <div class="emoji-item">⚠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A1</div>
    </td>
    <td>
        <div class="emoji-item">⚡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A2</div>
    </td>
    <td>
        <div class="emoji-item">⚢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A3</div>
    </td>
    <td>
        <div class="emoji-item">⚣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A4</div>
    </td>
    <td>
        <div class="emoji-item">⚤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A5</div>
    </td>
    <td>
        <div class="emoji-item">⚥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A6</div>
    </td>
    <td>
        <div class="emoji-item">⚦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A7</div>
    </td>
    <td>
        <div class="emoji-item">⚧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A8</div>
    </td>
    <td>
        <div class="emoji-item">⚨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26A9</div>
    </td>
    <td>
        <div class="emoji-item">⚩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26AA</div>
    </td>
    <td>
        <div class="emoji-item">⚪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26AB</div>
    </td>
    <td>
        <div class="emoji-item">⚫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26AC</div>
    </td>
    <td>
        <div class="emoji-item">⚬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26AD</div>
    </td>
    <td>
        <div class="emoji-item">⚭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26AE</div>
    </td>
    <td>
        <div class="emoji-item">⚮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26AF</div>
    </td>
    <td>
        <div class="emoji-item">⚯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B0</div>
    </td>
    <td>
        <div class="emoji-item">⚰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B1</div>
    </td>
    <td>
        <div class="emoji-item">⚱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B2</div>
    </td>
    <td>
        <div class="emoji-item">⚲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B3</div>
    </td>
    <td>
        <div class="emoji-item">⚳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B4</div>
    </td>
    <td>
        <div class="emoji-item">⚴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B5</div>
    </td>
    <td>
        <div class="emoji-item">⚵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B6</div>
    </td>
    <td>
        <div class="emoji-item">⚶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B7</div>
    </td>
    <td>
        <div class="emoji-item">⚷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B8</div>
    </td>
    <td>
        <div class="emoji-item">⚸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26B9</div>
    </td>
    <td>
        <div class="emoji-item">⚹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26BA</div>
    </td>
    <td>
        <div class="emoji-item">⚺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26BB</div>
    </td>
    <td>
        <div class="emoji-item">⚻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26BC</div>
    </td>
    <td>
        <div class="emoji-item">⚼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26BD</div>
    </td>
    <td>
        <div class="emoji-item">⚽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26BE</div>
    </td>
    <td>
        <div class="emoji-item">⚾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26BF</div>
    </td>
    <td>
        <div class="emoji-item">⚿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C0</div>
    </td>
    <td>
        <div class="emoji-item">⛀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C1</div>
    </td>
    <td>
        <div class="emoji-item">⛁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C2</div>
    </td>
    <td>
        <div class="emoji-item">⛂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C3</div>
    </td>
    <td>
        <div class="emoji-item">⛃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C4</div>
    </td>
    <td>
        <div class="emoji-item">⛄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C5</div>
    </td>
    <td>
        <div class="emoji-item">⛅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C6</div>
    </td>
    <td>
        <div class="emoji-item">⛆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C7</div>
    </td>
    <td>
        <div class="emoji-item">⛇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C8</div>
    </td>
    <td>
        <div class="emoji-item">⛈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26C9</div>
    </td>
    <td>
        <div class="emoji-item">⛉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26CA</div>
    </td>
    <td>
        <div class="emoji-item">⛊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26CB</div>
    </td>
    <td>
        <div class="emoji-item">⛋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26CC</div>
    </td>
    <td>
        <div class="emoji-item">⛌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26CD</div>
    </td>
    <td>
        <div class="emoji-item">⛍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26CE</div>
    </td>
    <td>
        <div class="emoji-item">⛎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26CF</div>
    </td>
    <td>
        <div class="emoji-item">⛏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D0</div>
    </td>
    <td>
        <div class="emoji-item">⛐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D1</div>
    </td>
    <td>
        <div class="emoji-item">⛑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D2</div>
    </td>
    <td>
        <div class="emoji-item">⛒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D3</div>
    </td>
    <td>
        <div class="emoji-item">⛓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D4</div>
    </td>
    <td>
        <div class="emoji-item">⛔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D5</div>
    </td>
    <td>
        <div class="emoji-item">⛕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D6</div>
    </td>
    <td>
        <div class="emoji-item">⛖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D7</div>
    </td>
    <td>
        <div class="emoji-item">⛗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D8</div>
    </td>
    <td>
        <div class="emoji-item">⛘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26D9</div>
    </td>
    <td>
        <div class="emoji-item">⛙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26DA</div>
    </td>
    <td>
        <div class="emoji-item">⛚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26DB</div>
    </td>
    <td>
        <div class="emoji-item">⛛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26DC</div>
    </td>
    <td>
        <div class="emoji-item">⛜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26DD</div>
    </td>
    <td>
        <div class="emoji-item">⛝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26DE</div>
    </td>
    <td>
        <div class="emoji-item">⛞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26DF</div>
    </td>
    <td>
        <div class="emoji-item">⛟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E0</div>
    </td>
    <td>
        <div class="emoji-item">⛠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E1</div>
    </td>
    <td>
        <div class="emoji-item">⛡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E2</div>
    </td>
    <td>
        <div class="emoji-item">⛢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E3</div>
    </td>
    <td>
        <div class="emoji-item">⛣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E4</div>
    </td>
    <td>
        <div class="emoji-item">⛤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E5</div>
    </td>
    <td>
        <div class="emoji-item">⛥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E6</div>
    </td>
    <td>
        <div class="emoji-item">⛦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E7</div>
    </td>
    <td>
        <div class="emoji-item">⛧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E8</div>
    </td>
    <td>
        <div class="emoji-item">⛨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26E9</div>
    </td>
    <td>
        <div class="emoji-item">⛩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26EA</div>
    </td>
    <td>
        <div class="emoji-item">⛪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26EB</div>
    </td>
    <td>
        <div class="emoji-item">⛫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26EC</div>
    </td>
    <td>
        <div class="emoji-item">⛬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26ED</div>
    </td>
    <td>
        <div class="emoji-item">⛭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26EE</div>
    </td>
    <td>
        <div class="emoji-item">⛮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26EF</div>
    </td>
    <td>
        <div class="emoji-item">⛯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F0</div>
    </td>
    <td>
        <div class="emoji-item">⛰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F1</div>
    </td>
    <td>
        <div class="emoji-item">⛱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F2</div>
    </td>
    <td>
        <div class="emoji-item">⛲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F3</div>
    </td>
    <td>
        <div class="emoji-item">⛳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F4</div>
    </td>
    <td>
        <div class="emoji-item">⛴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F5</div>
    </td>
    <td>
        <div class="emoji-item">⛵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F6</div>
    </td>
    <td>
        <div class="emoji-item">⛶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F7</div>
    </td>
    <td>
        <div class="emoji-item">⛷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F8</div>
    </td>
    <td>
        <div class="emoji-item">⛸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26F9</div>
    </td>
    <td>
        <div class="emoji-item">⛹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26FA</div>
    </td>
    <td>
        <div class="emoji-item">⛺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26FB</div>
    </td>
    <td>
        <div class="emoji-item">⛻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26FC</div>
    </td>
    <td>
        <div class="emoji-item">⛼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26FD</div>
    </td>
    <td>
        <div class="emoji-item">⛽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26FE</div>
    </td>
    <td>
        <div class="emoji-item">⛾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+26FF</div>
    </td>
    <td>
        <div class="emoji-item">⛿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2700</div>
    </td>
    <td>
        <div class="emoji-item">✀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2701</div>
    </td>
    <td>
        <div class="emoji-item">✁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2702</div>
    </td>
    <td>
        <div class="emoji-item">✂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2703</div>
    </td>
    <td>
        <div class="emoji-item">✃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2704</div>
    </td>
    <td>
        <div class="emoji-item">✄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2705</div>
    </td>
    <td>
        <div class="emoji-item">✅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2706</div>
    </td>
    <td>
        <div class="emoji-item">✆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2707</div>
    </td>
    <td>
        <div class="emoji-item">✇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2708</div>
    </td>
    <td>
        <div class="emoji-item">✈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2709</div>
    </td>
    <td>
        <div class="emoji-item">✉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+270A</div>
    </td>
    <td>
        <div class="emoji-item">✊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+270B</div>
    </td>
    <td>
        <div class="emoji-item">✋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+270C</div>
    </td>
    <td>
        <div class="emoji-item">✌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+270D</div>
    </td>
    <td>
        <div class="emoji-item">✍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+270E</div>
    </td>
    <td>
        <div class="emoji-item">✎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+270F</div>
    </td>
    <td>
        <div class="emoji-item">✏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2710</div>
    </td>
    <td>
        <div class="emoji-item">✐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2711</div>
    </td>
    <td>
        <div class="emoji-item">✑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2712</div>
    </td>
    <td>
        <div class="emoji-item">✒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2713</div>
    </td>
    <td>
        <div class="emoji-item">✓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2714</div>
    </td>
    <td>
        <div class="emoji-item">✔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2715</div>
    </td>
    <td>
        <div class="emoji-item">✕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2716</div>
    </td>
    <td>
        <div class="emoji-item">✖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2717</div>
    </td>
    <td>
        <div class="emoji-item">✗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2718</div>
    </td>
    <td>
        <div class="emoji-item">✘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2719</div>
    </td>
    <td>
        <div class="emoji-item">✙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+271A</div>
    </td>
    <td>
        <div class="emoji-item">✚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+271B</div>
    </td>
    <td>
        <div class="emoji-item">✛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+271C</div>
    </td>
    <td>
        <div class="emoji-item">✜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+271D</div>
    </td>
    <td>
        <div class="emoji-item">✝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+271E</div>
    </td>
    <td>
        <div class="emoji-item">✞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+271F</div>
    </td>
    <td>
        <div class="emoji-item">✟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2720</div>
    </td>
    <td>
        <div class="emoji-item">✠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2721</div>
    </td>
    <td>
        <div class="emoji-item">✡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2722</div>
    </td>
    <td>
        <div class="emoji-item">✢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2723</div>
    </td>
    <td>
        <div class="emoji-item">✣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2724</div>
    </td>
    <td>
        <div class="emoji-item">✤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2725</div>
    </td>
    <td>
        <div class="emoji-item">✥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2726</div>
    </td>
    <td>
        <div class="emoji-item">✦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2727</div>
    </td>
    <td>
        <div class="emoji-item">✧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2728</div>
    </td>
    <td>
        <div class="emoji-item">✨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2729</div>
    </td>
    <td>
        <div class="emoji-item">✩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+272A</div>
    </td>
    <td>
        <div class="emoji-item">✪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+272B</div>
    </td>
    <td>
        <div class="emoji-item">✫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+272C</div>
    </td>
    <td>
        <div class="emoji-item">✬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+272D</div>
    </td>
    <td>
        <div class="emoji-item">✭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+272E</div>
    </td>
    <td>
        <div class="emoji-item">✮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+272F</div>
    </td>
    <td>
        <div class="emoji-item">✯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2730</div>
    </td>
    <td>
        <div class="emoji-item">✰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2731</div>
    </td>
    <td>
        <div class="emoji-item">✱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2732</div>
    </td>
    <td>
        <div class="emoji-item">✲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2733</div>
    </td>
    <td>
        <div class="emoji-item">✳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2734</div>
    </td>
    <td>
        <div class="emoji-item">✴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2735</div>
    </td>
    <td>
        <div class="emoji-item">✵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2736</div>
    </td>
    <td>
        <div class="emoji-item">✶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2737</div>
    </td>
    <td>
        <div class="emoji-item">✷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2738</div>
    </td>
    <td>
        <div class="emoji-item">✸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2739</div>
    </td>
    <td>
        <div class="emoji-item">✹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+273A</div>
    </td>
    <td>
        <div class="emoji-item">✺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+273B</div>
    </td>
    <td>
        <div class="emoji-item">✻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+273C</div>
    </td>
    <td>
        <div class="emoji-item">✼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+273D</div>
    </td>
    <td>
        <div class="emoji-item">✽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+273E</div>
    </td>
    <td>
        <div class="emoji-item">✾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+273F</div>
    </td>
    <td>
        <div class="emoji-item">✿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2740</div>
    </td>
    <td>
        <div class="emoji-item">❀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2741</div>
    </td>
    <td>
        <div class="emoji-item">❁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2742</div>
    </td>
    <td>
        <div class="emoji-item">❂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2743</div>
    </td>
    <td>
        <div class="emoji-item">❃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2744</div>
    </td>
    <td>
        <div class="emoji-item">❄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2745</div>
    </td>
    <td>
        <div class="emoji-item">❅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2746</div>
    </td>
    <td>
        <div class="emoji-item">❆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2747</div>
    </td>
    <td>
        <div class="emoji-item">❇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2748</div>
    </td>
    <td>
        <div class="emoji-item">❈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2749</div>
    </td>
    <td>
        <div class="emoji-item">❉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+274A</div>
    </td>
    <td>
        <div class="emoji-item">❊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+274B</div>
    </td>
    <td>
        <div class="emoji-item">❋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+274C</div>
    </td>
    <td>
        <div class="emoji-item">❌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+274D</div>
    </td>
    <td>
        <div class="emoji-item">❍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+274E</div>
    </td>
    <td>
        <div class="emoji-item">❎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+274F</div>
    </td>
    <td>
        <div class="emoji-item">❏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2750</div>
    </td>
    <td>
        <div class="emoji-item">❐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2751</div>
    </td>
    <td>
        <div class="emoji-item">❑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2752</div>
    </td>
    <td>
        <div class="emoji-item">❒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2753</div>
    </td>
    <td>
        <div class="emoji-item">❓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2754</div>
    </td>
    <td>
        <div class="emoji-item">❔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2755</div>
    </td>
    <td>
        <div class="emoji-item">❕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2756</div>
    </td>
    <td>
        <div class="emoji-item">❖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2757</div>
    </td>
    <td>
        <div class="emoji-item">❗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2758</div>
    </td>
    <td>
        <div class="emoji-item">❘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2759</div>
    </td>
    <td>
        <div class="emoji-item">❙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+275A</div>
    </td>
    <td>
        <div class="emoji-item">❚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+275B</div>
    </td>
    <td>
        <div class="emoji-item">❛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+275C</div>
    </td>
    <td>
        <div class="emoji-item">❜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+275D</div>
    </td>
    <td>
        <div class="emoji-item">❝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+275E</div>
    </td>
    <td>
        <div class="emoji-item">❞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+275F</div>
    </td>
    <td>
        <div class="emoji-item">❟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2760</div>
    </td>
    <td>
        <div class="emoji-item">❠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2761</div>
    </td>
    <td>
        <div class="emoji-item">❡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2762</div>
    </td>
    <td>
        <div class="emoji-item">❢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2763</div>
    </td>
    <td>
        <div class="emoji-item">❣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2764</div>
    </td>
    <td>
        <div class="emoji-item">❤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2765</div>
    </td>
    <td>
        <div class="emoji-item">❥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2766</div>
    </td>
    <td>
        <div class="emoji-item">❦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2767</div>
    </td>
    <td>
        <div class="emoji-item">❧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2768</div>
    </td>
    <td>
        <div class="emoji-item">❨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2769</div>
    </td>
    <td>
        <div class="emoji-item">❩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+276A</div>
    </td>
    <td>
        <div class="emoji-item">❪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+276B</div>
    </td>
    <td>
        <div class="emoji-item">❫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+276C</div>
    </td>
    <td>
        <div class="emoji-item">❬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+276D</div>
    </td>
    <td>
        <div class="emoji-item">❭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+276E</div>
    </td>
    <td>
        <div class="emoji-item">❮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+276F</div>
    </td>
    <td>
        <div class="emoji-item">❯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2770</div>
    </td>
    <td>
        <div class="emoji-item">❰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2771</div>
    </td>
    <td>
        <div class="emoji-item">❱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2772</div>
    </td>
    <td>
        <div class="emoji-item">❲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2773</div>
    </td>
    <td>
        <div class="emoji-item">❳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2774</div>
    </td>
    <td>
        <div class="emoji-item">❴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2775</div>
    </td>
    <td>
        <div class="emoji-item">❵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2776</div>
    </td>
    <td>
        <div class="emoji-item">❶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2777</div>
    </td>
    <td>
        <div class="emoji-item">❷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2778</div>
    </td>
    <td>
        <div class="emoji-item">❸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2779</div>
    </td>
    <td>
        <div class="emoji-item">❹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+277A</div>
    </td>
    <td>
        <div class="emoji-item">❺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+277B</div>
    </td>
    <td>
        <div class="emoji-item">❻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+277C</div>
    </td>
    <td>
        <div class="emoji-item">❼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+277D</div>
    </td>
    <td>
        <div class="emoji-item">❽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+277E</div>
    </td>
    <td>
        <div class="emoji-item">❾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+277F</div>
    </td>
    <td>
        <div class="emoji-item">❿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2780</div>
    </td>
    <td>
        <div class="emoji-item">➀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2781</div>
    </td>
    <td>
        <div class="emoji-item">➁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2782</div>
    </td>
    <td>
        <div class="emoji-item">➂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2783</div>
    </td>
    <td>
        <div class="emoji-item">➃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2784</div>
    </td>
    <td>
        <div class="emoji-item">➄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2785</div>
    </td>
    <td>
        <div class="emoji-item">➅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2786</div>
    </td>
    <td>
        <div class="emoji-item">➆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2787</div>
    </td>
    <td>
        <div class="emoji-item">➇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2788</div>
    </td>
    <td>
        <div class="emoji-item">➈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2789</div>
    </td>
    <td>
        <div class="emoji-item">➉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+278A</div>
    </td>
    <td>
        <div class="emoji-item">➊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+278B</div>
    </td>
    <td>
        <div class="emoji-item">➋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+278C</div>
    </td>
    <td>
        <div class="emoji-item">➌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+278D</div>
    </td>
    <td>
        <div class="emoji-item">➍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+278E</div>
    </td>
    <td>
        <div class="emoji-item">➎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+278F</div>
    </td>
    <td>
        <div class="emoji-item">➏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2790</div>
    </td>
    <td>
        <div class="emoji-item">➐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2791</div>
    </td>
    <td>
        <div class="emoji-item">➑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2792</div>
    </td>
    <td>
        <div class="emoji-item">➒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2793</div>
    </td>
    <td>
        <div class="emoji-item">➓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2794</div>
    </td>
    <td>
        <div class="emoji-item">➔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2795</div>
    </td>
    <td>
        <div class="emoji-item">➕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2796</div>
    </td>
    <td>
        <div class="emoji-item">➖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2797</div>
    </td>
    <td>
        <div class="emoji-item">➗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2798</div>
    </td>
    <td>
        <div class="emoji-item">➘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+2799</div>
    </td>
    <td>
        <div class="emoji-item">➙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+279A</div>
    </td>
    <td>
        <div class="emoji-item">➚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+279B</div>
    </td>
    <td>
        <div class="emoji-item">➛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+279C</div>
    </td>
    <td>
        <div class="emoji-item">➜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+279D</div>
    </td>
    <td>
        <div class="emoji-item">➝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+279E</div>
    </td>
    <td>
        <div class="emoji-item">➞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+279F</div>
    </td>
    <td>
        <div class="emoji-item">➟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A0</div>
    </td>
    <td>
        <div class="emoji-item">➠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A1</div>
    </td>
    <td>
        <div class="emoji-item">➡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A2</div>
    </td>
    <td>
        <div class="emoji-item">➢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A3</div>
    </td>
    <td>
        <div class="emoji-item">➣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A4</div>
    </td>
    <td>
        <div class="emoji-item">➤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A5</div>
    </td>
    <td>
        <div class="emoji-item">➥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A6</div>
    </td>
    <td>
        <div class="emoji-item">➦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A7</div>
    </td>
    <td>
        <div class="emoji-item">➧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A8</div>
    </td>
    <td>
        <div class="emoji-item">➨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27A9</div>
    </td>
    <td>
        <div class="emoji-item">➩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27AA</div>
    </td>
    <td>
        <div class="emoji-item">➪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27AB</div>
    </td>
    <td>
        <div class="emoji-item">➫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27AC</div>
    </td>
    <td>
        <div class="emoji-item">➬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27AD</div>
    </td>
    <td>
        <div class="emoji-item">➭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27AE</div>
    </td>
    <td>
        <div class="emoji-item">➮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27AF</div>
    </td>
    <td>
        <div class="emoji-item">➯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B0</div>
    </td>
    <td>
        <div class="emoji-item">➰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B1</div>
    </td>
    <td>
        <div class="emoji-item">➱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B2</div>
    </td>
    <td>
        <div class="emoji-item">➲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B3</div>
    </td>
    <td>
        <div class="emoji-item">➳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B4</div>
    </td>
    <td>
        <div class="emoji-item">➴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B5</div>
    </td>
    <td>
        <div class="emoji-item">➵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B6</div>
    </td>
    <td>
        <div class="emoji-item">➶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B7</div>
    </td>
    <td>
        <div class="emoji-item">➷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B8</div>
    </td>
    <td>
        <div class="emoji-item">➸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27B9</div>
    </td>
    <td>
        <div class="emoji-item">➹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27BA</div>
    </td>
    <td>
        <div class="emoji-item">➺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27BB</div>
    </td>
    <td>
        <div class="emoji-item">➻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27BC</div>
    </td>
    <td>
        <div class="emoji-item">➼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27BD</div>
    </td>
    <td>
        <div class="emoji-item">➽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27BE</div>
    </td>
    <td>
        <div class="emoji-item">➾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+27BF</div>
    </td>
    <td>
        <div class="emoji-item">➿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F900</div>
    </td>
    <td>
        <div class="emoji-item">🤀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F901</div>
    </td>
    <td>
        <div class="emoji-item">🤁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F902</div>
    </td>
    <td>
        <div class="emoji-item">🤂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F903</div>
    </td>
    <td>
        <div class="emoji-item">🤃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F904</div>
    </td>
    <td>
        <div class="emoji-item">🤄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F905</div>
    </td>
    <td>
        <div class="emoji-item">🤅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F906</div>
    </td>
    <td>
        <div class="emoji-item">🤆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F907</div>
    </td>
    <td>
        <div class="emoji-item">🤇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F908</div>
    </td>
    <td>
        <div class="emoji-item">🤈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F909</div>
    </td>
    <td>
        <div class="emoji-item">🤉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F90A</div>
    </td>
    <td>
        <div class="emoji-item">🤊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F90B</div>
    </td>
    <td>
        <div class="emoji-item">🤋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F90C</div>
    </td>
    <td>
        <div class="emoji-item">🤌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F90D</div>
    </td>
    <td>
        <div class="emoji-item">🤍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F90E</div>
    </td>
    <td>
        <div class="emoji-item">🤎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F90F</div>
    </td>
    <td>
        <div class="emoji-item">🤏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F910</div>
    </td>
    <td>
        <div class="emoji-item">🤐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F911</div>
    </td>
    <td>
        <div class="emoji-item">🤑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F912</div>
    </td>
    <td>
        <div class="emoji-item">🤒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F913</div>
    </td>
    <td>
        <div class="emoji-item">🤓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F914</div>
    </td>
    <td>
        <div class="emoji-item">🤔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F915</div>
    </td>
    <td>
        <div class="emoji-item">🤕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F916</div>
    </td>
    <td>
        <div class="emoji-item">🤖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F917</div>
    </td>
    <td>
        <div class="emoji-item">🤗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F918</div>
    </td>
    <td>
        <div class="emoji-item">🤘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F919</div>
    </td>
    <td>
        <div class="emoji-item">🤙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F91A</div>
    </td>
    <td>
        <div class="emoji-item">🤚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F91B</div>
    </td>
    <td>
        <div class="emoji-item">🤛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F91C</div>
    </td>
    <td>
        <div class="emoji-item">🤜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F91D</div>
    </td>
    <td>
        <div class="emoji-item">🤝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F91E</div>
    </td>
    <td>
        <div class="emoji-item">🤞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F91F</div>
    </td>
    <td>
        <div class="emoji-item">🤟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F920</div>
    </td>
    <td>
        <div class="emoji-item">🤠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F921</div>
    </td>
    <td>
        <div class="emoji-item">🤡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F922</div>
    </td>
    <td>
        <div class="emoji-item">🤢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F923</div>
    </td>
    <td>
        <div class="emoji-item">🤣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F924</div>
    </td>
    <td>
        <div class="emoji-item">🤤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F925</div>
    </td>
    <td>
        <div class="emoji-item">🤥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F926</div>
    </td>
    <td>
        <div class="emoji-item">🤦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F927</div>
    </td>
    <td>
        <div class="emoji-item">🤧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F928</div>
    </td>
    <td>
        <div class="emoji-item">🤨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F929</div>
    </td>
    <td>
        <div class="emoji-item">🤩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F92A</div>
    </td>
    <td>
        <div class="emoji-item">🤪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F92B</div>
    </td>
    <td>
        <div class="emoji-item">🤫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F92C</div>
    </td>
    <td>
        <div class="emoji-item">🤬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F92D</div>
    </td>
    <td>
        <div class="emoji-item">🤭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F92E</div>
    </td>
    <td>
        <div class="emoji-item">🤮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F92F</div>
    </td>
    <td>
        <div class="emoji-item">🤯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F930</div>
    </td>
    <td>
        <div class="emoji-item">🤰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F931</div>
    </td>
    <td>
        <div class="emoji-item">🤱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F932</div>
    </td>
    <td>
        <div class="emoji-item">🤲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F933</div>
    </td>
    <td>
        <div class="emoji-item">🤳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F934</div>
    </td>
    <td>
        <div class="emoji-item">🤴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F935</div>
    </td>
    <td>
        <div class="emoji-item">🤵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F936</div>
    </td>
    <td>
        <div class="emoji-item">🤶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F937</div>
    </td>
    <td>
        <div class="emoji-item">🤷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F938</div>
    </td>
    <td>
        <div class="emoji-item">🤸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F939</div>
    </td>
    <td>
        <div class="emoji-item">🤹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F93A</div>
    </td>
    <td>
        <div class="emoji-item">🤺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F93B</div>
    </td>
    <td>
        <div class="emoji-item">🤻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F93C</div>
    </td>
    <td>
        <div class="emoji-item">🤼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F93D</div>
    </td>
    <td>
        <div class="emoji-item">🤽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F93E</div>
    </td>
    <td>
        <div class="emoji-item">🤾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F93F</div>
    </td>
    <td>
        <div class="emoji-item">🤿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F940</div>
    </td>
    <td>
        <div class="emoji-item">🥀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F941</div>
    </td>
    <td>
        <div class="emoji-item">🥁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F942</div>
    </td>
    <td>
        <div class="emoji-item">🥂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F943</div>
    </td>
    <td>
        <div class="emoji-item">🥃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F944</div>
    </td>
    <td>
        <div class="emoji-item">🥄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F945</div>
    </td>
    <td>
        <div class="emoji-item">🥅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F946</div>
    </td>
    <td>
        <div class="emoji-item">🥆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F947</div>
    </td>
    <td>
        <div class="emoji-item">🥇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F948</div>
    </td>
    <td>
        <div class="emoji-item">🥈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F949</div>
    </td>
    <td>
        <div class="emoji-item">🥉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F94A</div>
    </td>
    <td>
        <div class="emoji-item">🥊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F94B</div>
    </td>
    <td>
        <div class="emoji-item">🥋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F94C</div>
    </td>
    <td>
        <div class="emoji-item">🥌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F94D</div>
    </td>
    <td>
        <div class="emoji-item">🥍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F94E</div>
    </td>
    <td>
        <div class="emoji-item">🥎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F94F</div>
    </td>
    <td>
        <div class="emoji-item">🥏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F950</div>
    </td>
    <td>
        <div class="emoji-item">🥐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F951</div>
    </td>
    <td>
        <div class="emoji-item">🥑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F952</div>
    </td>
    <td>
        <div class="emoji-item">🥒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F953</div>
    </td>
    <td>
        <div class="emoji-item">🥓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F954</div>
    </td>
    <td>
        <div class="emoji-item">🥔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F955</div>
    </td>
    <td>
        <div class="emoji-item">🥕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F956</div>
    </td>
    <td>
        <div class="emoji-item">🥖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F957</div>
    </td>
    <td>
        <div class="emoji-item">🥗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F958</div>
    </td>
    <td>
        <div class="emoji-item">🥘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F959</div>
    </td>
    <td>
        <div class="emoji-item">🥙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F95A</div>
    </td>
    <td>
        <div class="emoji-item">🥚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F95B</div>
    </td>
    <td>
        <div class="emoji-item">🥛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F95C</div>
    </td>
    <td>
        <div class="emoji-item">🥜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F95D</div>
    </td>
    <td>
        <div class="emoji-item">🥝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F95E</div>
    </td>
    <td>
        <div class="emoji-item">🥞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F95F</div>
    </td>
    <td>
        <div class="emoji-item">🥟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F960</div>
    </td>
    <td>
        <div class="emoji-item">🥠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F961</div>
    </td>
    <td>
        <div class="emoji-item">🥡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F962</div>
    </td>
    <td>
        <div class="emoji-item">🥢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F963</div>
    </td>
    <td>
        <div class="emoji-item">🥣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F964</div>
    </td>
    <td>
        <div class="emoji-item">🥤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F965</div>
    </td>
    <td>
        <div class="emoji-item">🥥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F966</div>
    </td>
    <td>
        <div class="emoji-item">🥦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F967</div>
    </td>
    <td>
        <div class="emoji-item">🥧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F968</div>
    </td>
    <td>
        <div class="emoji-item">🥨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F969</div>
    </td>
    <td>
        <div class="emoji-item">🥩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F96A</div>
    </td>
    <td>
        <div class="emoji-item">🥪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F96B</div>
    </td>
    <td>
        <div class="emoji-item">🥫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F96C</div>
    </td>
    <td>
        <div class="emoji-item">🥬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F96D</div>
    </td>
    <td>
        <div class="emoji-item">🥭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F96E</div>
    </td>
    <td>
        <div class="emoji-item">🥮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F96F</div>
    </td>
    <td>
        <div class="emoji-item">🥯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F970</div>
    </td>
    <td>
        <div class="emoji-item">🥰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F971</div>
    </td>
    <td>
        <div class="emoji-item">🥱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F972</div>
    </td>
    <td>
        <div class="emoji-item">🥲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F973</div>
    </td>
    <td>
        <div class="emoji-item">🥳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F974</div>
    </td>
    <td>
        <div class="emoji-item">🥴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F975</div>
    </td>
    <td>
        <div class="emoji-item">🥵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F976</div>
    </td>
    <td>
        <div class="emoji-item">🥶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F977</div>
    </td>
    <td>
        <div class="emoji-item">🥷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F978</div>
    </td>
    <td>
        <div class="emoji-item">🥸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F979</div>
    </td>
    <td>
        <div class="emoji-item">🥹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F97A</div>
    </td>
    <td>
        <div class="emoji-item">🥺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F97B</div>
    </td>
    <td>
        <div class="emoji-item">🥻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F97C</div>
    </td>
    <td>
        <div class="emoji-item">🥼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F97D</div>
    </td>
    <td>
        <div class="emoji-item">🥽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F97E</div>
    </td>
    <td>
        <div class="emoji-item">🥾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F97F</div>
    </td>
    <td>
        <div class="emoji-item">🥿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F980</div>
    </td>
    <td>
        <div class="emoji-item">🦀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F981</div>
    </td>
    <td>
        <div class="emoji-item">🦁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F982</div>
    </td>
    <td>
        <div class="emoji-item">🦂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F983</div>
    </td>
    <td>
        <div class="emoji-item">🦃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F984</div>
    </td>
    <td>
        <div class="emoji-item">🦄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F985</div>
    </td>
    <td>
        <div class="emoji-item">🦅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F986</div>
    </td>
    <td>
        <div class="emoji-item">🦆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F987</div>
    </td>
    <td>
        <div class="emoji-item">🦇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F988</div>
    </td>
    <td>
        <div class="emoji-item">🦈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F989</div>
    </td>
    <td>
        <div class="emoji-item">🦉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F98A</div>
    </td>
    <td>
        <div class="emoji-item">🦊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F98B</div>
    </td>
    <td>
        <div class="emoji-item">🦋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F98C</div>
    </td>
    <td>
        <div class="emoji-item">🦌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F98D</div>
    </td>
    <td>
        <div class="emoji-item">🦍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F98E</div>
    </td>
    <td>
        <div class="emoji-item">🦎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F98F</div>
    </td>
    <td>
        <div class="emoji-item">🦏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F990</div>
    </td>
    <td>
        <div class="emoji-item">🦐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F991</div>
    </td>
    <td>
        <div class="emoji-item">🦑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F992</div>
    </td>
    <td>
        <div class="emoji-item">🦒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F993</div>
    </td>
    <td>
        <div class="emoji-item">🦓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F994</div>
    </td>
    <td>
        <div class="emoji-item">🦔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F995</div>
    </td>
    <td>
        <div class="emoji-item">🦕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F996</div>
    </td>
    <td>
        <div class="emoji-item">🦖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F997</div>
    </td>
    <td>
        <div class="emoji-item">🦗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F998</div>
    </td>
    <td>
        <div class="emoji-item">🦘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F999</div>
    </td>
    <td>
        <div class="emoji-item">🦙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F99A</div>
    </td>
    <td>
        <div class="emoji-item">🦚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F99B</div>
    </td>
    <td>
        <div class="emoji-item">🦛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F99C</div>
    </td>
    <td>
        <div class="emoji-item">🦜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F99D</div>
    </td>
    <td>
        <div class="emoji-item">🦝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F99E</div>
    </td>
    <td>
        <div class="emoji-item">🦞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F99F</div>
    </td>
    <td>
        <div class="emoji-item">🦟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A0</div>
    </td>
    <td>
        <div class="emoji-item">🦠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A1</div>
    </td>
    <td>
        <div class="emoji-item">🦡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A2</div>
    </td>
    <td>
        <div class="emoji-item">🦢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A3</div>
    </td>
    <td>
        <div class="emoji-item">🦣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A4</div>
    </td>
    <td>
        <div class="emoji-item">🦤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A5</div>
    </td>
    <td>
        <div class="emoji-item">🦥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A6</div>
    </td>
    <td>
        <div class="emoji-item">🦦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A7</div>
    </td>
    <td>
        <div class="emoji-item">🦧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A8</div>
    </td>
    <td>
        <div class="emoji-item">🦨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9A9</div>
    </td>
    <td>
        <div class="emoji-item">🦩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9AA</div>
    </td>
    <td>
        <div class="emoji-item">🦪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9AB</div>
    </td>
    <td>
        <div class="emoji-item">🦫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9AC</div>
    </td>
    <td>
        <div class="emoji-item">🦬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9AD</div>
    </td>
    <td>
        <div class="emoji-item">🦭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9AE</div>
    </td>
    <td>
        <div class="emoji-item">🦮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9AF</div>
    </td>
    <td>
        <div class="emoji-item">🦯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B0</div>
    </td>
    <td>
        <div class="emoji-item">🦰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B1</div>
    </td>
    <td>
        <div class="emoji-item">🦱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B2</div>
    </td>
    <td>
        <div class="emoji-item">🦲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B3</div>
    </td>
    <td>
        <div class="emoji-item">🦳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B4</div>
    </td>
    <td>
        <div class="emoji-item">🦴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B5</div>
    </td>
    <td>
        <div class="emoji-item">🦵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B6</div>
    </td>
    <td>
        <div class="emoji-item">🦶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B7</div>
    </td>
    <td>
        <div class="emoji-item">🦷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B8</div>
    </td>
    <td>
        <div class="emoji-item">🦸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9B9</div>
    </td>
    <td>
        <div class="emoji-item">🦹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9BA</div>
    </td>
    <td>
        <div class="emoji-item">🦺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9BB</div>
    </td>
    <td>
        <div class="emoji-item">🦻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9BC</div>
    </td>
    <td>
        <div class="emoji-item">🦼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9BD</div>
    </td>
    <td>
        <div class="emoji-item">🦽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9BE</div>
    </td>
    <td>
        <div class="emoji-item">🦾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9BF</div>
    </td>
    <td>
        <div class="emoji-item">🦿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C0</div>
    </td>
    <td>
        <div class="emoji-item">🧀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C1</div>
    </td>
    <td>
        <div class="emoji-item">🧁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C2</div>
    </td>
    <td>
        <div class="emoji-item">🧂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C3</div>
    </td>
    <td>
        <div class="emoji-item">🧃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C4</div>
    </td>
    <td>
        <div class="emoji-item">🧄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C5</div>
    </td>
    <td>
        <div class="emoji-item">🧅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C6</div>
    </td>
    <td>
        <div class="emoji-item">🧆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C7</div>
    </td>
    <td>
        <div class="emoji-item">🧇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C8</div>
    </td>
    <td>
        <div class="emoji-item">🧈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9C9</div>
    </td>
    <td>
        <div class="emoji-item">🧉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9CA</div>
    </td>
    <td>
        <div class="emoji-item">🧊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9CB</div>
    </td>
    <td>
        <div class="emoji-item">🧋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9CC</div>
    </td>
    <td>
        <div class="emoji-item">🧌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9CD</div>
    </td>
    <td>
        <div class="emoji-item">🧍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9CE</div>
    </td>
    <td>
        <div class="emoji-item">🧎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9CF</div>
    </td>
    <td>
        <div class="emoji-item">🧏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D0</div>
    </td>
    <td>
        <div class="emoji-item">🧐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D1</div>
    </td>
    <td>
        <div class="emoji-item">🧑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D2</div>
    </td>
    <td>
        <div class="emoji-item">🧒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D3</div>
    </td>
    <td>
        <div class="emoji-item">🧓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D4</div>
    </td>
    <td>
        <div class="emoji-item">🧔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D5</div>
    </td>
    <td>
        <div class="emoji-item">🧕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D6</div>
    </td>
    <td>
        <div class="emoji-item">🧖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D7</div>
    </td>
    <td>
        <div class="emoji-item">🧗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D8</div>
    </td>
    <td>
        <div class="emoji-item">🧘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9D9</div>
    </td>
    <td>
        <div class="emoji-item">🧙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9DA</div>
    </td>
    <td>
        <div class="emoji-item">🧚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9DB</div>
    </td>
    <td>
        <div class="emoji-item">🧛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9DC</div>
    </td>
    <td>
        <div class="emoji-item">🧜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9DD</div>
    </td>
    <td>
        <div class="emoji-item">🧝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9DE</div>
    </td>
    <td>
        <div class="emoji-item">🧞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9DF</div>
    </td>
    <td>
        <div class="emoji-item">🧟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E0</div>
    </td>
    <td>
        <div class="emoji-item">🧠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E1</div>
    </td>
    <td>
        <div class="emoji-item">🧡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E2</div>
    </td>
    <td>
        <div class="emoji-item">🧢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E3</div>
    </td>
    <td>
        <div class="emoji-item">🧣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E4</div>
    </td>
    <td>
        <div class="emoji-item">🧤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E5</div>
    </td>
    <td>
        <div class="emoji-item">🧥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E6</div>
    </td>
    <td>
        <div class="emoji-item">🧦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E7</div>
    </td>
    <td>
        <div class="emoji-item">🧧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E8</div>
    </td>
    <td>
        <div class="emoji-item">🧨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9E9</div>
    </td>
    <td>
        <div class="emoji-item">🧩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9EA</div>
    </td>
    <td>
        <div class="emoji-item">🧪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9EB</div>
    </td>
    <td>
        <div class="emoji-item">🧫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9EC</div>
    </td>
    <td>
        <div class="emoji-item">🧬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9ED</div>
    </td>
    <td>
        <div class="emoji-item">🧭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9EE</div>
    </td>
    <td>
        <div class="emoji-item">🧮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9EF</div>
    </td>
    <td>
        <div class="emoji-item">🧯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F0</div>
    </td>
    <td>
        <div class="emoji-item">🧰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F1</div>
    </td>
    <td>
        <div class="emoji-item">🧱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F2</div>
    </td>
    <td>
        <div class="emoji-item">🧲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F3</div>
    </td>
    <td>
        <div class="emoji-item">🧳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F4</div>
    </td>
    <td>
        <div class="emoji-item">🧴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F5</div>
    </td>
    <td>
        <div class="emoji-item">🧵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F6</div>
    </td>
    <td>
        <div class="emoji-item">🧶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F7</div>
    </td>
    <td>
        <div class="emoji-item">🧷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F8</div>
    </td>
    <td>
        <div class="emoji-item">🧸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9F9</div>
    </td>
    <td>
        <div class="emoji-item">🧹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9FA</div>
    </td>
    <td>
        <div class="emoji-item">🧺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9FB</div>
    </td>
    <td>
        <div class="emoji-item">🧻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9FC</div>
    </td>
    <td>
        <div class="emoji-item">🧼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9FD</div>
    </td>
    <td>
        <div class="emoji-item">🧽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9FE</div>
    </td>
    <td>
        <div class="emoji-item">🧾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1F9FF</div>
    </td>
    <td>
        <div class="emoji-item">🧿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA70</div>
    </td>
    <td>
        <div class="emoji-item">🩰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA71</div>
    </td>
    <td>
        <div class="emoji-item">🩱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA72</div>
    </td>
    <td>
        <div class="emoji-item">🩲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA73</div>
    </td>
    <td>
        <div class="emoji-item">🩳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA74</div>
    </td>
    <td>
        <div class="emoji-item">🩴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA75</div>
    </td>
    <td>
        <div class="emoji-item">🩵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA76</div>
    </td>
    <td>
        <div class="emoji-item">🩶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA77</div>
    </td>
    <td>
        <div class="emoji-item">🩷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA78</div>
    </td>
    <td>
        <div class="emoji-item">🩸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA79</div>
    </td>
    <td>
        <div class="emoji-item">🩹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA7A</div>
    </td>
    <td>
        <div class="emoji-item">🩺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA7B</div>
    </td>
    <td>
        <div class="emoji-item">🩻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA7C</div>
    </td>
    <td>
        <div class="emoji-item">🩼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA7D</div>
    </td>
    <td>
        <div class="emoji-item">🩽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA7E</div>
    </td>
    <td>
        <div class="emoji-item">🩾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA7F</div>
    </td>
    <td>
        <div class="emoji-item">🩿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA80</div>
    </td>
    <td>
        <div class="emoji-item">🪀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA81</div>
    </td>
    <td>
        <div class="emoji-item">🪁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA82</div>
    </td>
    <td>
        <div class="emoji-item">🪂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA83</div>
    </td>
    <td>
        <div class="emoji-item">🪃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA84</div>
    </td>
    <td>
        <div class="emoji-item">🪄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA85</div>
    </td>
    <td>
        <div class="emoji-item">🪅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA86</div>
    </td>
    <td>
        <div class="emoji-item">🪆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA87</div>
    </td>
    <td>
        <div class="emoji-item">🪇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA88</div>
    </td>
    <td>
        <div class="emoji-item">🪈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA89</div>
    </td>
    <td>
        <div class="emoji-item">🪉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA8A</div>
    </td>
    <td>
        <div class="emoji-item">🪊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA8B</div>
    </td>
    <td>
        <div class="emoji-item">🪋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA8C</div>
    </td>
    <td>
        <div class="emoji-item">🪌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA8D</div>
    </td>
    <td>
        <div class="emoji-item">🪍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA8E</div>
    </td>
    <td>
        <div class="emoji-item">🪎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA8F</div>
    </td>
    <td>
        <div class="emoji-item">🪏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA90</div>
    </td>
    <td>
        <div class="emoji-item">🪐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA91</div>
    </td>
    <td>
        <div class="emoji-item">🪑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA92</div>
    </td>
    <td>
        <div class="emoji-item">🪒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA93</div>
    </td>
    <td>
        <div class="emoji-item">🪓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA94</div>
    </td>
    <td>
        <div class="emoji-item">🪔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA95</div>
    </td>
    <td>
        <div class="emoji-item">🪕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA96</div>
    </td>
    <td>
        <div class="emoji-item">🪖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA97</div>
    </td>
    <td>
        <div class="emoji-item">🪗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA98</div>
    </td>
    <td>
        <div class="emoji-item">🪘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA99</div>
    </td>
    <td>
        <div class="emoji-item">🪙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA9A</div>
    </td>
    <td>
        <div class="emoji-item">🪚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA9B</div>
    </td>
    <td>
        <div class="emoji-item">🪛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA9C</div>
    </td>
    <td>
        <div class="emoji-item">🪜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA9D</div>
    </td>
    <td>
        <div class="emoji-item">🪝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA9E</div>
    </td>
    <td>
        <div class="emoji-item">🪞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FA9F</div>
    </td>
    <td>
        <div class="emoji-item">🪟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA0</div>
    </td>
    <td>
        <div class="emoji-item">🪠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA1</div>
    </td>
    <td>
        <div class="emoji-item">🪡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA2</div>
    </td>
    <td>
        <div class="emoji-item">🪢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA3</div>
    </td>
    <td>
        <div class="emoji-item">🪣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA4</div>
    </td>
    <td>
        <div class="emoji-item">🪤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA5</div>
    </td>
    <td>
        <div class="emoji-item">🪥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA6</div>
    </td>
    <td>
        <div class="emoji-item">🪦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA7</div>
    </td>
    <td>
        <div class="emoji-item">🪧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA8</div>
    </td>
    <td>
        <div class="emoji-item">🪨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAA9</div>
    </td>
    <td>
        <div class="emoji-item">🪩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAAA</div>
    </td>
    <td>
        <div class="emoji-item">🪪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAAB</div>
    </td>
    <td>
        <div class="emoji-item">🪫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAAC</div>
    </td>
    <td>
        <div class="emoji-item">🪬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAAD</div>
    </td>
    <td>
        <div class="emoji-item">🪭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAAE</div>
    </td>
    <td>
        <div class="emoji-item">🪮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAAF</div>
    </td>
    <td>
        <div class="emoji-item">🪯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB0</div>
    </td>
    <td>
        <div class="emoji-item">🪰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB1</div>
    </td>
    <td>
        <div class="emoji-item">🪱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB2</div>
    </td>
    <td>
        <div class="emoji-item">🪲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB3</div>
    </td>
    <td>
        <div class="emoji-item">🪳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB4</div>
    </td>
    <td>
        <div class="emoji-item">🪴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB5</div>
    </td>
    <td>
        <div class="emoji-item">🪵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB6</div>
    </td>
    <td>
        <div class="emoji-item">🪶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB7</div>
    </td>
    <td>
        <div class="emoji-item">🪷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB8</div>
    </td>
    <td>
        <div class="emoji-item">🪸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAB9</div>
    </td>
    <td>
        <div class="emoji-item">🪹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FABA</div>
    </td>
    <td>
        <div class="emoji-item">🪺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FABB</div>
    </td>
    <td>
        <div class="emoji-item">🪻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FABC</div>
    </td>
    <td>
        <div class="emoji-item">🪼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FABD</div>
    </td>
    <td>
        <div class="emoji-item">🪽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FABE</div>
    </td>
    <td>
        <div class="emoji-item">🪾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FABF</div>
    </td>
    <td>
        <div class="emoji-item">🪿</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC0</div>
    </td>
    <td>
        <div class="emoji-item">🫀</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC1</div>
    </td>
    <td>
        <div class="emoji-item">🫁</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC2</div>
    </td>
    <td>
        <div class="emoji-item">🫂</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC3</div>
    </td>
    <td>
        <div class="emoji-item">🫃</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC4</div>
    </td>
    <td>
        <div class="emoji-item">🫄</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC5</div>
    </td>
    <td>
        <div class="emoji-item">🫅</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC6</div>
    </td>
    <td>
        <div class="emoji-item">🫆</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC7</div>
    </td>
    <td>
        <div class="emoji-item">🫇</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC8</div>
    </td>
    <td>
        <div class="emoji-item">🫈</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAC9</div>
    </td>
    <td>
        <div class="emoji-item">🫉</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FACA</div>
    </td>
    <td>
        <div class="emoji-item">🫊</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FACB</div>
    </td>
    <td>
        <div class="emoji-item">🫋</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FACC</div>
    </td>
    <td>
        <div class="emoji-item">🫌</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FACD</div>
    </td>
    <td>
        <div class="emoji-item">🫍</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FACE</div>
    </td>
    <td>
        <div class="emoji-item">🫎</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FACF</div>
    </td>
    <td>
        <div class="emoji-item">🫏</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD0</div>
    </td>
    <td>
        <div class="emoji-item">🫐</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD1</div>
    </td>
    <td>
        <div class="emoji-item">🫑</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD2</div>
    </td>
    <td>
        <div class="emoji-item">🫒</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD3</div>
    </td>
    <td>
        <div class="emoji-item">🫓</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD4</div>
    </td>
    <td>
        <div class="emoji-item">🫔</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD5</div>
    </td>
    <td>
        <div class="emoji-item">🫕</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD6</div>
    </td>
    <td>
        <div class="emoji-item">🫖</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD7</div>
    </td>
    <td>
        <div class="emoji-item">🫗</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD8</div>
    </td>
    <td>
        <div class="emoji-item">🫘</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAD9</div>
    </td>
    <td>
        <div class="emoji-item">🫙</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FADA</div>
    </td>
    <td>
        <div class="emoji-item">🫚</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FADB</div>
    </td>
    <td>
        <div class="emoji-item">🫛</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FADC</div>
    </td>
    <td>
        <div class="emoji-item">🫜</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FADD</div>
    </td>
    <td>
        <div class="emoji-item">🫝</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FADE</div>
    </td>
    <td>
        <div class="emoji-item">🫞</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FADF</div>
    </td>
    <td>
        <div class="emoji-item">🫟</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE0</div>
    </td>
    <td>
        <div class="emoji-item">🫠</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE1</div>
    </td>
    <td>
        <div class="emoji-item">🫡</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE2</div>
    </td>
    <td>
        <div class="emoji-item">🫢</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE3</div>
    </td>
    <td>
        <div class="emoji-item">🫣</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE4</div>
    </td>
    <td>
        <div class="emoji-item">🫤</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE5</div>
    </td>
    <td>
        <div class="emoji-item">🫥</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE6</div>
    </td>
    <td>
        <div class="emoji-item">🫦</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE7</div>
    </td>
    <td>
        <div class="emoji-item">🫧</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE8</div>
    </td>
    <td>
        <div class="emoji-item">🫨</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAE9</div>
    </td>
    <td>
        <div class="emoji-item">🫩</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAEA</div>
    </td>
    <td>
        <div class="emoji-item">🫪</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAEB</div>
    </td>
    <td>
        <div class="emoji-item">🫫</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAEC</div>
    </td>
    <td>
        <div class="emoji-item">🫬</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAED</div>
    </td>
    <td>
        <div class="emoji-item">🫭</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAEE</div>
    </td>
    <td>
        <div class="emoji-item">🫮</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAEF</div>
    </td>
    <td>
        <div class="emoji-item">🫯</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF0</div>
    </td>
    <td>
        <div class="emoji-item">🫰</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF1</div>
    </td>
    <td>
        <div class="emoji-item">🫱</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF2</div>
    </td>
    <td>
        <div class="emoji-item">🫲</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF3</div>
    </td>
    <td>
        <div class="emoji-item">🫳</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF4</div>
    </td>
    <td>
        <div class="emoji-item">🫴</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF5</div>
    </td>
    <td>
        <div class="emoji-item">🫵</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF6</div>
    </td>
    <td>
        <div class="emoji-item">🫶</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF7</div>
    </td>
    <td>
        <div class="emoji-item">🫷</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF8</div>
    </td>
    <td>
        <div class="emoji-item">🫸</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAF9</div>
    </td>
    <td>
        <div class="emoji-item">🫹</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAFA</div>
    </td>
    <td>
        <div class="emoji-item">🫺</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAFB</div>
    </td>
    <td>
        <div class="emoji-item">🫻</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAFC</div>
    </td>
    <td>
        <div class="emoji-item">🫼</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAFD</div>
    </td>
    <td>
        <div class="emoji-item">🫽</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAFE</div>
    </td>
    <td>
        <div class="emoji-item">🫾</div>
    </td>
</tr>
<tr>
    <td>
        <div class="emoji-item">U+1FAFF</div>
    </td>
    <td>
        <div class="emoji-item">🫿</div>
    </td>
</tr>
</table>