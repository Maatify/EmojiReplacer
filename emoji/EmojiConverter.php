<?php
/**
 * Created by Maatify.dev
 * User: Maatify.dev
 * Date: 2024-08-02
 * Time: 11:13 PM
 * https://www.Maatify.dev
 */

namespace Maatify\Emoji;

class EmojiConverter
{
    /**
     * Convert emojis to their codepoint representation
     *
     * @param   string  $string  The input string containing emojis
     *
     * @return string The string with emojis replaced by codepoints
     */
    public static function emojiToCodepoint(string $string): string
    {
        return preg_replace_callback('/./u', function ($match) {
            $char = $match[0];
            if (self::isEmoji($char)) {
                $codepoint = self::unicodeCodepoint($char);
                return "U+" . $codepoint;
            }
            return $char;
        }, $string);
    }

    /**
     * Convert codepoint representation back to emojis
     *
     * @param   string  $string  The input string containing codepoints
     *
     * @return string The string with codepoints replaced by emojis
     */
    public static function codepointToEmoji(string $string): string
    {
        return preg_replace_callback('/U\+([0-9A-F]{4,5}|10[0-9A-F]{4})/i', function ($match) {
            return self::unicodeChar(hexdec($match[1]));
        }, $string);
    }

    /**
     * Check if a character is an emoji
     *
     * @param   string  $char  The character to check
     *
     * @return bool True if the character is an emoji, false otherwise
     */
    private static function isEmoji(string $char): bool
    {
        return preg_match('/[\x{1F600}-\x{1F64F}]/u', $char) ||
               preg_match('/[\x{1F300}-\x{1F5FF}]/u', $char) ||
               preg_match('/[\x{1F680}-\x{1F6FF}]/u', $char) ||
               preg_match('/[\x{2600}-\x{26FF}]/u', $char) ||
               preg_match('/[\x{2700}-\x{27BF}]/u', $char);
    }

    /**
     * Get the Unicode codepoint of a character
     *
     * @param   string  $char  The input character
     *
     * @return string The Unicode codepoint
     */
    private static function unicodeCodepoint(string $char): string
    {
        $code = mb_ord($char, 'UTF-8');
        return strtoupper(dechex($code));
    }

    /**
     * Convert a Unicode codepoint to a character
     *
     * @param   int  $codepoint  The Unicode codepoint
     *
     * @return string The corresponding character
     */
    private static function unicodeChar(int $codepoint): string
    {
        return mb_chr($codepoint, 'UTF-8');
    }
}