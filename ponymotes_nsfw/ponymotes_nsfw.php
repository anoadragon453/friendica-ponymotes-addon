<?php
/*
 * Name: Ponymotes NSFW
 * Description: Ponymotes with NSFW, Questionable and nonpony tags enabled
 * Version: 1.0
 * Author: Rainbow Dash <https://ponies.im/profile/rainbowdash>
 *
 */
use Friendica\Core\Addon;

function ponymotes_nsfw_install() {
    Addon::registerHook('smilie', 'addon/ponymotes_nsfw/ponymotes_nsfw.php', 'ponymotes_nsfw');
}

function ponymotes_nsfw_uninstall() {
    Addon::unregisterHook('smilie', 'addon/ponymotes_nsfw/ponymotes_nsfw.php', 'ponymotes_nsfw');
}

function ponymotes_nsfw(&$a,&$b) {

    $b['texts'][] = ':13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/13.png' . '" alt="' . ':13:' . '" />';

    $b['texts'][] = ':21pokerface:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/21pokerface.png' . '" alt="' . ':21pokerface:' . '" />';

    $b['texts'][] = ':31eipekili:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/31eipekili.png' . '" alt="' . ':31eipekili:' . '" />';

    $b['texts'][] = ':60fluts:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/60fluts.png' . '" alt="' . ':60fluts:' . '" />';

    $b['texts'][] = ':60jig:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/60jig.png' . '" alt="' . ':60jig:' . '" />';

    $b['texts'][] = ':60pose:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/60pose.png' . '" alt="' . ':60pose:' . '" />';

    $b['texts'][] = ':abbrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/abbrick.png' . '" alt="' . ':abbrick:' . '" />';

    $b['texts'][] = ':abfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/abfun.png' . '" alt="' . ':abfun:' . '" />';

    $b['texts'][] = ':abouttoburst:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/abouttoburst.png' . '" alt="' . ':abouttoburst:' . '" />';

    $b['texts'][] = ':abpresenting:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/abpresenting.png' . '" alt="' . ':abpresenting:' . '" />';

    $b['texts'][] = ':acexlefty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/acexlefty.png' . '" alt="' . ':acexlefty:' . '" />';

    $b['texts'][] = ':adagiofun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/adagiofun.png' . '" alt="' . ':adagiofun:' . '" />';

    $b['texts'][] = ':ajbrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ajbrick.png' . '" alt="' . ':ajbrick:' . '" />';

    $b['texts'][] = ':ajcumshot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ajcumshot.png' . '" alt="' . ':ajcumshot:' . '" />';

    $b['texts'][] = ':ajfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ajfun.png' . '" alt="' . ':ajfun:' . '" />';

    $b['texts'][] = ':ajplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ajplot.png' . '" alt="' . ':ajplot:' . '" />';

    $b['texts'][] = ':ajsbanana:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ajsbanana.png' . '" alt="' . ':ajsbanana:' . '" />';

    $b['texts'][] = ':ajshake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ajshake.png' . '" alt="' . ':ajshake:' . '" />';

    $b['texts'][] = ':ajtrfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ajtrfun.png' . '" alt="' . ':ajtrfun:' . '" />';

    $b['texts'][] = ':ajtrmount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ajtrmount.png' . '" alt="' . ':ajtrmount:' . '" />';

    $b['texts'][] = ':allhail:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/allhail.png' . '" alt="' . ':allhail:' . '" />';

    $b['texts'][] = ':alotofdiscord:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/alotofdiscord.png' . '" alt="' . ':alotofdiscord:' . '" />';

    $b['texts'][] = ':alpacalove:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/alpacalove.png' . '" alt="' . ':alpacalove:' . '" />';

    $b['texts'][] = ':alphysawkward:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/alphysawkward.png' . '" alt="' . ':alphysawkward:' . '" />';

    $b['texts'][] = ':alphysknowswhatrpsyouredoing:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/alphysknowswhatrpsyouredoing.png' . '" alt="' . ':alphysknowswhatrpsyouredoing:' . '" />';

    $b['texts'][] = ':alphysnervous:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/alphysnervous.png' . '" alt="' . ':alphysnervous:' . '" />';

    $b['texts'][] = ':alphys:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/alphys.png' . '" alt="' . ':alphys:' . '" />';

    $b['texts'][] = ':alphystalk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/alphystalk.png' . '" alt="' . ':alphystalk:' . '" />';

    $b['texts'][] = ':america:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/america.png' . '" alt="' . ':america:' . '" />';

    $b['texts'][] = ':amnesia:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/amnesia.png' . '" alt="' . ':amnesia:' . '" />';

    $b['texts'][] = ':andmyaxe:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/andmyaxe.png' . '" alt="' . ':andmyaxe:' . '" />';

    $b['texts'][] = ':andy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/andy.png' . '" alt="' . ':andy:' . '" />';

    $b['texts'][] = ':angryfrog:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/angryfrog.png' . '" alt="' . ':angryfrog:' . '" />';

    $b['texts'][] = ':anonesphug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/anonesphug.png' . '" alt="' . ':anonesphug:' . '" />';

    $b['texts'][] = ':apexwhattheclop:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/apexwhattheclop.png' . '" alt="' . ':apexwhattheclop:' . '" />';

    $b['texts'][] = ':aphxtwn:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/aphxtwn.png' . '" alt="' . ':aphxtwn:' . '" />';

    $b['texts'][] = ':appleshibe:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/appleshibe.png' . '" alt="' . ':appleshibe:' . '" />';

    $b['texts'][] = ':archer:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/archer.png' . '" alt="' . ':archer:' . '" />';

    $b['texts'][] = ':archersaur:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/archersaur.png' . '" alt="' . ':archersaur:' . '" />';

    $b['texts'][] = ':archmagesea:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/archmagesea.png' . '" alt="' . ':archmagesea:' . '" />';

    $b['texts'][] = ':arousing:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/arousing.png' . '" alt="' . ':arousing:' . '" />';

    $b['texts'][] = ':artfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/artfun.png' . '" alt="' . ':artfun:' . '" />';

    $b['texts'][] = ':artimiscock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/artimiscock.png' . '" alt="' . ':artimiscock:' . '" />';

    $b['texts'][] = ':art:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/art.png' . '" alt="' . ':art:' . '" />';

    $b['texts'][] = ':asgorebattle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/asgorebattle.png' . '" alt="' . ':asgorebattle:' . '" />';

    $b['texts'][] = ':asgore:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/asgore.png' . '" alt="' . ':asgore:' . '" />';

    $b['texts'][] = ':asgorewut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/asgorewut.png' . '" alt="' . ':asgorewut:' . '" />';

    $b['texts'][] = ':ashleefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ashleefun.png' . '" alt="' . ':ashleefun:' . '" />';

    $b['texts'][] = ':ashpie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ashpie.png' . '" alt="' . ':ashpie:' . '" />';

    $b['texts'][] = ':asriel:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/asriel.png' . '" alt="' . ':asriel:' . '" />';

    $b['texts'][] = ':assrub:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/assrub.png' . '" alt="' . ':assrub:' . '" />';

    $b['texts'][] = ':asstoass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/asstoass.png' . '" alt="' . ':asstoass:' . '" />';

    $b['texts'][] = ':astronomicalwankersign:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/astronomicalwankersign.png' . '" alt="' . ':astronomicalwankersign:' . '" />';

    $b['texts'][] = ':at20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/at20.png' . '" alt="' . ':at20:' . '" />';

    $b['texts'][] = ':ave:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ave.png' . '" alt="' . ':ave:' . '" />';

    $b['texts'][] = ':awesomecat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/awesomecat.png' . '" alt="' . ':awesomecat:' . '" />';

    $b['texts'][] = ':awesomeguy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/awesomeguy.png' . '" alt="' . ':awesomeguy:' . '" />';

    $b['texts'][] = ':ba00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba00.png' . '" alt="' . ':ba00:' . '" />';

    $b['texts'][] = ':ba01:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba01.png' . '" alt="' . ':ba01:' . '" />';

    $b['texts'][] = ':ba02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba02.png' . '" alt="' . ':ba02:' . '" />';

    $b['texts'][] = ':ba03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba03.png' . '" alt="' . ':ba03:' . '" />';

    $b['texts'][] = ':ba04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba04.png' . '" alt="' . ':ba04:' . '" />';

    $b['texts'][] = ':ba10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba10.png' . '" alt="' . ':ba10:' . '" />';

    $b['texts'][] = ':ba11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba11.png' . '" alt="' . ':ba11:' . '" />';

    $b['texts'][] = ':ba12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba12.png' . '" alt="' . ':ba12:' . '" />';

    $b['texts'][] = ':ba13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba13.png' . '" alt="' . ':ba13:' . '" />';

    $b['texts'][] = ':ba14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba14.png' . '" alt="' . ':ba14:' . '" />';

    $b['texts'][] = ':ba1:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba1.png' . '" alt="' . ':ba1:' . '" />';

    $b['texts'][] = ':ba20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba20.png' . '" alt="' . ':ba20:' . '" />';

    $b['texts'][] = ':ba21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba21.png' . '" alt="' . ':ba21:' . '" />';

    $b['texts'][] = ':ba22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba22.png' . '" alt="' . ':ba22:' . '" />';

    $b['texts'][] = ':ba23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba23.png' . '" alt="' . ':ba23:' . '" />';

    $b['texts'][] = ':ba24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba24.png' . '" alt="' . ':ba24:' . '" />';

    $b['texts'][] = ':ba2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ba2.png' . '" alt="' . ':ba2:' . '" />';

    $b['texts'][] = ':babbychris:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/babbychris.png' . '" alt="' . ':babbychris:' . '" />';

    $b['texts'][] = ':babflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/babflip.png' . '" alt="' . ':babflip:' . '" />';

    $b['texts'][] = ':babhuh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/babhuh.png' . '" alt="' . ':babhuh:' . '" />';

    $b['texts'][] = ':babsbutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/babsbutt.png' . '" alt="' . ':babsbutt:' . '" />';

    $b['texts'][] = ':babsmile:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/babsmile.png' . '" alt="' . ':babsmile:' . '" />';

    $b['texts'][] = ':babwut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/babwut.png' . '" alt="' . ':babwut:' . '" />';

    $b['texts'][] = ':babyplease:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/babyplease.png' . '" alt="' . ':babyplease:' . '" />';

    $b['texts'][] = ':bacon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bacon.png' . '" alt="' . ':bacon:' . '" />';

    $b['texts'][] = ':badjokemostlikely:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/badjokemostlikely.png' . '" alt="' . ':badjokemostlikely:' . '" />';

    $b['texts'][] = ':badvibes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/badvibes.png' . '" alt="' . ':badvibes:' . '" />';

    $b['texts'][] = ':bajbaffle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajbaffle.png' . '" alt="' . ':bajbaffle:' . '" />';

    $b['texts'][] = ':bajconfused:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajconfused.png' . '" alt="' . ':bajconfused:' . '" />';

    $b['texts'][] = ':bajcower:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajcower.png' . '" alt="' . ':bajcower:' . '" />';

    $b['texts'][] = ':bajentjfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajentjfun.png' . '" alt="' . ':bajentjfun:' . '" />';

    $b['texts'][] = ':bajflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajflip.png' . '" alt="' . ':bajflip:' . '" />';

    $b['texts'][] = ':bajfrown:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajfrown.png' . '" alt="' . ':bajfrown:' . '" />';

    $b['texts'][] = ':bajfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajfun.png' . '" alt="' . ':bajfun:' . '" />';

    $b['texts'][] = ':bajhappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajhappy.png' . '" alt="' . ':bajhappy:' . '" />';

    $b['texts'][] = ':bajlie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajlie.png' . '" alt="' . ':bajlie:' . '" />';

    $b['texts'][] = ':bajsly:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajsly.png' . '" alt="' . ':bajsly:' . '" />';

    $b['texts'][] = ':bajtherapy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajtherapy.png' . '" alt="' . ':bajtherapy:' . '" />';

    $b['texts'][] = ':bajugh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajugh.png' . '" alt="' . ':bajugh:' . '" />';

    $b['texts'][] = ':bajwut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bajwut.png' . '" alt="' . ':bajwut:' . '" />';

    $b['texts'][] = ':ballmybits:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ballmybits.png' . '" alt="' . ':ballmybits:' . '" />';

    $b['texts'][] = ':ballthetables:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ballthetables.png' . '" alt="' . ':ballthetables:' . '" />';

    $b['texts'][] = ':bananaflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bananaflip.png' . '" alt="' . ':bananaflip:' . '" />';

    $b['texts'][] = ':banana:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/banana.png' . '" alt="' . ':banana:' . '" />';

    $b['texts'][] = ':bananasalute:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bananasalute.png' . '" alt="' . ':bananasalute:' . '" />';

    $b['texts'][] = ':bananawithit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bananawithit.png' . '" alt="' . ':bananawithit:' . '" />';

    $b['texts'][] = ':bandaloobestpony:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bandaloobestpony.png' . '" alt="' . ':bandaloobestpony:' . '" />';

    $b['texts'][] = ':bangel:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bangel.png' . '" alt="' . ':bangel:' . '" />';

    $b['texts'][] = ':batman:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/batman.png' . '" alt="' . ':batman:' . '" />';

    $b['texts'][] = ':batnips:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/batnips.png' . '" alt="' . ':batnips:' . '" />';

    $b['texts'][] = ':bb00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb00.png' . '" alt="' . ':bb00:' . '" />';

    $b['texts'][] = ':bb01:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb01.png' . '" alt="' . ':bb01:' . '" />';

    $b['texts'][] = ':bb02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb02.png' . '" alt="' . ':bb02:' . '" />';

    $b['texts'][] = ':bb03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb03.png' . '" alt="' . ':bb03:' . '" />';

    $b['texts'][] = ':bb04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb04.png' . '" alt="' . ':bb04:' . '" />';

    $b['texts'][] = ':bb05:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb05.png' . '" alt="' . ':bb05:' . '" />';

    $b['texts'][] = ':bb06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb06.png' . '" alt="' . ':bb06:' . '" />';

    $b['texts'][] = ':bb07:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb07.png' . '" alt="' . ':bb07:' . '" />';

    $b['texts'][] = ':bb08:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb08.png' . '" alt="' . ':bb08:' . '" />';

    $b['texts'][] = ':bb09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb09.png' . '" alt="' . ':bb09:' . '" />';

    $b['texts'][] = ':bb10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb10.png' . '" alt="' . ':bb10:' . '" />';

    $b['texts'][] = ':bb11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb11.png' . '" alt="' . ':bb11:' . '" />';

    $b['texts'][] = ':bb12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb12.png' . '" alt="' . ':bb12:' . '" />';

    $b['texts'][] = ':bb13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb13.png' . '" alt="' . ':bb13:' . '" />';

    $b['texts'][] = ':bb14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb14.png' . '" alt="' . ':bb14:' . '" />';

    $b['texts'][] = ':bb15:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb15.png' . '" alt="' . ':bb15:' . '" />';

    $b['texts'][] = ':bb16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb16.png' . '" alt="' . ':bb16:' . '" />';

    $b['texts'][] = ':bb17:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb17.png' . '" alt="' . ':bb17:' . '" />';

    $b['texts'][] = ':bb18:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb18.png' . '" alt="' . ':bb18:' . '" />';

    $b['texts'][] = ':bb19:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb19.png' . '" alt="' . ':bb19:' . '" />';

    $b['texts'][] = ':bb20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb20.png' . '" alt="' . ':bb20:' . '" />';

    $b['texts'][] = ':bb21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb21.png' . '" alt="' . ':bb21:' . '" />';

    $b['texts'][] = ':bb22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb22.png' . '" alt="' . ':bb22:' . '" />';

    $b['texts'][] = ':bb23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb23.png' . '" alt="' . ':bb23:' . '" />';

    $b['texts'][] = ':bb24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb24.png' . '" alt="' . ':bb24:' . '" />';

    $b['texts'][] = ':bb25:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb25.png' . '" alt="' . ':bb25:' . '" />';

    $b['texts'][] = ':bb26:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb26.png' . '" alt="' . ':bb26:' . '" />';

    $b['texts'][] = ':bb27:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb27.png' . '" alt="' . ':bb27:' . '" />';

    $b['texts'][] = ':bb28:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb28.png' . '" alt="' . ':bb28:' . '" />';

    $b['texts'][] = ':bb29:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb29.png' . '" alt="' . ':bb29:' . '" />';

    $b['texts'][] = ':bb30:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb30.png' . '" alt="' . ':bb30:' . '" />';

    $b['texts'][] = ':bb31:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb31.png' . '" alt="' . ':bb31:' . '" />';

    $b['texts'][] = ':bb32:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb32.png' . '" alt="' . ':bb32:' . '" />';

    $b['texts'][] = ':bb33:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb33.png' . '" alt="' . ':bb33:' . '" />';

    $b['texts'][] = ':bb34:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb34.png' . '" alt="' . ':bb34:' . '" />';

    $b['texts'][] = ':bb35:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb35.png' . '" alt="' . ':bb35:' . '" />';

    $b['texts'][] = ':bb36:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb36.png' . '" alt="' . ':bb36:' . '" />';

    $b['texts'][] = ':bb37:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb37.png' . '" alt="' . ':bb37:' . '" />';

    $b['texts'][] = ':bb38:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb38.png' . '" alt="' . ':bb38:' . '" />';

    $b['texts'][] = ':bb39:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bb39.png' . '" alt="' . ':bb39:' . '" />';

    $b['texts'][] = ':BBBBBBBBBBBBBBBBBBBBBB:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/BBBBBBBBBBBBBBBBBBBBBB.png' . '" alt="' . ':BBBBBBBBBBBBBBBBBBBBBB:' . '" />';

    $b['texts'][] = ':BBBB:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/BBBB.png' . '" alt="' . ':BBBB:' . '" />';

    $b['texts'][] = ':bberryflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bberryflip.png' . '" alt="' . ':bberryflip:' . '" />';

    $b['texts'][] = ':bberry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bberry.png' . '" alt="' . ':bberry:' . '" />';

    $b['texts'][] = ':bbinsocks:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bbinsocks.png' . '" alt="' . ':bbinsocks:' . '" />';

    $b['texts'][] = ':bblacksnooty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bblacksnooty.png' . '" alt="' . ':bblacksnooty:' . '" />';

    $b['texts'][] = ':bbonbon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bbonbon.png' . '" alt="' . ':bbonbon:' . '" />';

    $b['texts'][] = ':bbonflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bbonflip.png' . '" alt="' . ':bbonflip:' . '" />';

    $b['texts'][] = ':bbonfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bbonfun.png' . '" alt="' . ':bbonfun:' . '" />';

    $b['texts'][] = ':bc00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc00.png' . '" alt="' . ':bc00:' . '" />';

    $b['texts'][] = ':bc01:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc01.png' . '" alt="' . ':bc01:' . '" />';

    $b['texts'][] = ':bc02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc02.png' . '" alt="' . ':bc02:' . '" />';

    $b['texts'][] = ':bc03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc03.png' . '" alt="' . ':bc03:' . '" />';

    $b['texts'][] = ':bc04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc04.png' . '" alt="' . ':bc04:' . '" />';

    $b['texts'][] = ':bc05:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc05.png' . '" alt="' . ':bc05:' . '" />';

    $b['texts'][] = ':bc06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc06.png' . '" alt="' . ':bc06:' . '" />';

    $b['texts'][] = ':bc07:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc07.png' . '" alt="' . ':bc07:' . '" />';

    $b['texts'][] = ':bc08:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc08.png' . '" alt="' . ':bc08:' . '" />';

    $b['texts'][] = ':bc09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc09.png' . '" alt="' . ':bc09:' . '" />';

    $b['texts'][] = ':bc10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc10.png' . '" alt="' . ':bc10:' . '" />';

    $b['texts'][] = ':bc11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc11.png' . '" alt="' . ':bc11:' . '" />';

    $b['texts'][] = ':bc12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc12.png' . '" alt="' . ':bc12:' . '" />';

    $b['texts'][] = ':bc13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc13.png' . '" alt="' . ':bc13:' . '" />';

    $b['texts'][] = ':bc14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc14.png' . '" alt="' . ':bc14:' . '" />';

    $b['texts'][] = ':bc15:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc15.png' . '" alt="' . ':bc15:' . '" />';

    $b['texts'][] = ':bc16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc16.png' . '" alt="' . ':bc16:' . '" />';

    $b['texts'][] = ':bc17:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc17.png' . '" alt="' . ':bc17:' . '" />';

    $b['texts'][] = ':bc18:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc18.png' . '" alt="' . ':bc18:' . '" />';

    $b['texts'][] = ':bc19:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc19.png' . '" alt="' . ':bc19:' . '" />';

    $b['texts'][] = ':bc20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc20.png' . '" alt="' . ':bc20:' . '" />';

    $b['texts'][] = ':bc21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc21.png' . '" alt="' . ':bc21:' . '" />';

    $b['texts'][] = ':bc22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc22.png' . '" alt="' . ':bc22:' . '" />';

    $b['texts'][] = ':bc23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc23.png' . '" alt="' . ':bc23:' . '" />';

    $b['texts'][] = ':bc24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc24.png' . '" alt="' . ':bc24:' . '" />';

    $b['texts'][] = ':bc25:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc25.png' . '" alt="' . ':bc25:' . '" />';

    $b['texts'][] = ':bc26:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc26.png' . '" alt="' . ':bc26:' . '" />';

    $b['texts'][] = ':bc27:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc27.png' . '" alt="' . ':bc27:' . '" />';

    $b['texts'][] = ':bc28:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc28.png' . '" alt="' . ':bc28:' . '" />';

    $b['texts'][] = ':bc29:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bc29.png' . '" alt="' . ':bc29:' . '" />';

    $b['texts'][] = ':bcelestiamad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bcelestiamad.png' . '" alt="' . ':bcelestiamad:' . '" />';

    $b['texts'][] = ':bcelestia:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bcelestia.png' . '" alt="' . ':bcelestia:' . '" />';

    $b['texts'][] = ':bcheerfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bcheerfun.png' . '" alt="' . ':bcheerfun:' . '" />';

    $b['texts'][] = ':bcheerilee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bcheerilee.png' . '" alt="' . ':bcheerilee:' . '" />';

    $b['texts'][] = ':bcockatrice:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bcockatrice.png' . '" alt="' . ':bcockatrice:' . '" />';

    $b['texts'][] = ':bcolgate:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bcolgate.png' . '" alt="' . ':bcolgate:' . '" />';

    $b['texts'][] = ':bcutealoo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bcutealoo.png' . '" alt="' . ':bcutealoo:' . '" />';

    $b['texts'][] = ':bdashflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bdashflip.png' . '" alt="' . ':bdashflip:' . '" />';

    $b['texts'][] = ':bdashfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bdashfun.png' . '" alt="' . ':bdashfun:' . '" />';

    $b['texts'][] = ':bdealwithit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bdealwithit.png' . '" alt="' . ':bdealwithit:' . '" />';

    $b['texts'][] = ':bderpflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bderpflip.png' . '" alt="' . ':bderpflip:' . '" />';

    $b['texts'][] = ':bderpfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bderpfun.png' . '" alt="' . ':bderpfun:' . '" />';

    $b['texts'][] = ':bderp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bderp.png' . '" alt="' . ':bderp:' . '" />';

    $b['texts'][] = ':bderpwizard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bderpwizard.png' . '" alt="' . ':bderpwizard:' . '" />';

    $b['texts'][] = ':bderpyhappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bderpyhappy.png' . '" alt="' . ':bderpyhappy:' . '" />';

    $b['texts'][] = ':bderpyshock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bderpyshock.png' . '" alt="' . ':bderpyshock:' . '" />';

    $b['texts'][] = ':bdisflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bdisflip.png' . '" alt="' . ':bdisflip:' . '" />';

    $b['texts'][] = ':bdj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bdj.png' . '" alt="' . ':bdj:' . '" />';

    $b['texts'][] = ':bdpflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bdpflip.png' . '" alt="' . ':bdpflip:' . '" />';

    $b['texts'][] = ':bdumbfabric:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bdumbfabric.png' . '" alt="' . ':bdumbfabric:' . '" />';

    $b['texts'][] = ':bearface:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bearface.png' . '" alt="' . ':bearface:' . '" />';

    $b['texts'][] = ':becausescience:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/becausescience.png' . '" alt="' . ':becausescience:' . '" />';

    $b['texts'][] = ':beershrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/beershrug.png' . '" alt="' . ':beershrug:' . '" />';

    $b['texts'][] = ':beesarelove:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/beesarelove.png' . '" alt="' . ':beesarelove:' . '" />';

    $b['texts'][] = ':beeson:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/beeson.png' . '" alt="' . ':beeson:' . '" />';

    $b['texts'][] = ':beeyup:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/beeyup.png' . '" alt="' . ':beeyup:' . '" />';

    $b['texts'][] = ':berrytuber:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/berrytuber.png' . '" alt="' . ':berrytuber:' . '" />';

    $b['texts'][] = ':bestcentaur:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bestcentaur.png' . '" alt="' . ':bestcentaur:' . '" />';

    $b['texts'][] = ':bfabulous:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bfabulous.png' . '" alt="' . ':bfabulous:' . '" />';

    $b['texts'][] = ':bfacehoof:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bfacehoof.png' . '" alt="' . ':bfacehoof:' . '" />';

    $b['texts'][] = ':bfillytgap:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bfillytgap.png' . '" alt="' . ':bfillytgap:' . '" />';

    $b['texts'][] = ':bflutflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bflutflip.png' . '" alt="' . ':bflutflip:' . '" />';

    $b['texts'][] = ':bflutterblush:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bflutterblush.png' . '" alt="' . ':bflutterblush:' . '" />';

    $b['texts'][] = ':bflutterfear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bflutterfear.png' . '" alt="' . ':bflutterfear:' . '" />';

    $b['texts'][] = ':bflutterjerk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bflutterjerk.png' . '" alt="' . ':bflutterjerk:' . '" />';

    $b['texts'][] = ':bfluttershh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bfluttershh.png' . '" alt="' . ':bfluttershh:' . '" />';

    $b['texts'][] = ':bfluttershy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bfluttershy.png' . '" alt="' . ':bfluttershy:' . '" />';

    $b['texts'][] = ':bfluttersrs:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bfluttersrs.png' . '" alt="' . ':bfluttersrs:' . '" />';

    $b['texts'][] = ':bflutterwink:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bflutterwink.png' . '" alt="' . ':bflutterwink:' . '" />';

    $b['texts'][] = ':bflutteryay:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bflutteryay.png' . '" alt="' . ':bflutteryay:' . '" />';

    $b['texts'][] = ':bghuman:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bghuman.png' . '" alt="' . ':bghuman:' . '" />';

    $b['texts'][] = ':bgross:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bgross.png' . '" alt="' . ':bgross:' . '" />';

    $b['texts'][] = ':bhahaha:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bhahaha.png' . '" alt="' . ':bhahaha:' . '" />';

    $b['texts'][] = ':bhapplejack:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bhapplejack.png' . '" alt="' . ':bhapplejack:' . '" />';

    $b['texts'][] = ':bhappyluna:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bhappyluna.png' . '" alt="' . ':bhappyluna:' . '" />';

    $b['texts'][] = ':bhmmm:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bhmmm.png' . '" alt="' . ':bhmmm:' . '" />';

    $b['texts'][] = ':bhokeysmokes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bhokeysmokes.png' . '" alt="' . ':bhokeysmokes:' . '" />';

    $b['texts'][] = ':bhuhhuh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bhuhhuh.png' . '" alt="' . ':bhuhhuh:' . '" />';

    $b['texts'][] = ':bible:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bible.png' . '" alt="' . ':bible:' . '" />';

    $b['texts'][] = ':bigbacon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bigbacon.png' . '" alt="' . ':bigbacon:' . '" />';

    $b['texts'][] = ':bigenough:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bigenough.png' . '" alt="' . ':bigenough:' . '" />';

    $b['texts'][] = ':billyo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/billyo.png' . '" alt="' . ':billyo:' . '" />';

    $b['texts'][] = ':bird:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bird.png' . '" alt="' . ':bird:' . '" />';

    $b['texts'][] = ':bjcakeday:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bjcakeday.png' . '" alt="' . ':bjcakeday:' . '" />';

    $b['texts'][] = ':bjelly:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bjelly.png' . '" alt="' . ':bjelly:' . '" />';

    $b['texts'][] = ':bjml:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bjml.png' . '" alt="' . ':bjml:' . '" />';

    $b['texts'][] = ':bjoy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bjoy.png' . '" alt="' . ':bjoy:' . '" />';

    $b['texts'][] = ':bj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bj.png' . '" alt="' . ':bj:' . '" />';

    $b['texts'][] = ':bkarmaflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bkarmaflip.png' . '" alt="' . ':bkarmaflip:' . '" />';

    $b['texts'][] = ':bl00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bl00.png' . '" alt="' . ':bl00:' . '" />';

    $b['texts'][] = ':blank:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blank.png' . '" alt="' . ':blank:' . '" />';

    $b['texts'][] = ':blily:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blily.png' . '" alt="' . ':blily:' . '" />';

    $b['texts'][] = ':blootascoo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blootascoo.png' . '" alt="' . ':blootascoo:' . '" />';

    $b['texts'][] = ':blouder:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blouder.png' . '" alt="' . ':blouder:' . '" />';

    $b['texts'][] = ':bloveme:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bloveme.png' . '" alt="' . ':bloveme:' . '" />';

    $b['texts'][] = ':blueballs:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blueballs.png' . '" alt="' . ':blueballs:' . '" />';

    $b['texts'][] = ':blueshaft:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blueshaft.png' . '" alt="' . ':blueshaft:' . '" />';

    $b['texts'][] = ':blueshiftsealofapproval:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blueshiftsealofapproval.png' . '" alt="' . ':blueshiftsealofapproval:' . '" />';

    $b['texts'][] = ':blunaflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blunaflip.png' . '" alt="' . ':blunaflip:' . '" />';

    $b['texts'][] = ':blunafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blunafun.png' . '" alt="' . ':blunafun:' . '" />';

    $b['texts'][] = ':blunagasp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blunagasp.png' . '" alt="' . ':blunagasp:' . '" />';

    $b['texts'][] = ':blunahappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blunahappy.png' . '" alt="' . ':blunahappy:' . '" />';

    $b['texts'][] = ':blunasad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blunasad.png' . '" alt="' . ':blunasad:' . '" />';

    $b['texts'][] = ':blunateehee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blunateehee.png' . '" alt="' . ':blunateehee:' . '" />';

    $b['texts'][] = ':blunawait:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blunawait.png' . '" alt="' . ':blunawait:' . '" />';

    $b['texts'][] = ':blyraflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blyraflip.png' . '" alt="' . ':blyraflip:' . '" />';

    $b['texts'][] = ':blyrafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blyrafun.png' . '" alt="' . ':blyrafun:' . '" />';

    $b['texts'][] = ':blyra:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/blyra.png' . '" alt="' . ':blyra:' . '" />';

    $b['texts'][] = ':bmanspike:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bmanspike.png' . '" alt="' . ':bmanspike:' . '" />';

    $b['texts'][] = ':bmmount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bmmount.png' . '" alt="' . ':bmmount:' . '" />';

    $b['texts'][] = ':bnewrainbowdash:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bnewrainbowdash.png' . '" alt="' . ':bnewrainbowdash:' . '" />';

    $b['texts'][] = ':bnmm:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bnmm.png' . '" alt="' . ':bnmm:' . '" />';

    $b['texts'][] = ':bnoooo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bnoooo.png' . '" alt="' . ':bnoooo:' . '" />';

    $b['texts'][] = ':bobross:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bobross.png' . '" alt="' . ':bobross:' . '" />';

    $b['texts'][] = ':boctavia:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/boctavia.png' . '" alt="' . ':boctavia:' . '" />';

    $b['texts'][] = ':boctflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/boctflip.png' . '" alt="' . ':boctflip:' . '" />';

    $b['texts'][] = ':bohhi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bohhi.png' . '" alt="' . ':bohhi:' . '" />';

    $b['texts'][] = ':bon20s:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bon20s.png' . '" alt="' . ':bon20s:' . '" />';

    $b['texts'][] = ':bonfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bonfun.png' . '" alt="' . ':bonfun:' . '" />';

    $b['texts'][] = ':bookcatbird:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bookcatbird.png' . '" alt="' . ':bookcatbird:' . '" />';

    $b['texts'][] = ':books:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/books.png' . '" alt="' . ':books:' . '" />';

    $b['texts'][] = ':bpa00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpa00.png' . '" alt="' . ':bpa00:' . '" />';

    $b['texts'][] = ':bpa10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpa10.png' . '" alt="' . ':bpa10:' . '" />';

    $b['texts'][] = ':bpa13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpa13.png' . '" alt="' . ':bpa13:' . '" />';

    $b['texts'][] = ':bpa20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpa20.png' . '" alt="' . ':bpa20:' . '" />';

    $b['texts'][] = ':bpani03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpani03.png' . '" alt="' . ':bpani03:' . '" />';

    $b['texts'][] = ':bpani06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpani06.png' . '" alt="' . ':bpani06:' . '" />';

    $b['texts'][] = ':bpani11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpani11.png' . '" alt="' . ':bpani11:' . '" />';

    $b['texts'][] = ':bpani12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpani12.png' . '" alt="' . ':bpani12:' . '" />';

    $b['texts'][] = ':bpani14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpani14.png' . '" alt="' . ':bpani14:' . '" />';

    $b['texts'][] = ':bpani23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpani23.png' . '" alt="' . ':bpani23:' . '" />';

    $b['texts'][] = ':bpaperbagderpy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpaperbagderpy.png' . '" alt="' . ':bpaperbagderpy:' . '" />';

    $b['texts'][] = ':bpaperbagwizard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpaperbagwizard.png' . '" alt="' . ':bpaperbagwizard:' . '" />';

    $b['texts'][] = ':bparty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bparty.png' . '" alt="' . ':bparty:' . '" />';

    $b['texts'][] = ':bpb20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpb20.png' . '" alt="' . ':bpb20:' . '" />';

    $b['texts'][] = ':bpb27:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpb27.png' . '" alt="' . ':bpb27:' . '" />';

    $b['texts'][] = ':bpc06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpc06.png' . '" alt="' . ':bpc06:' . '" />';

    $b['texts'][] = ':bpc16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpc16.png' . '" alt="' . ':bpc16:' . '" />';

    $b['texts'][] = ':bpd21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpd21.png' . '" alt="' . ':bpd21:' . '" />';

    $b['texts'][] = ':bpd23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpd23.png' . '" alt="' . ':bpd23:' . '" />';

    $b['texts'][] = ':bpd27:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpd27.png' . '" alt="' . ':bpd27:' . '" />';

    $b['texts'][] = ':bpe06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpe06.png' . '" alt="' . ':bpe06:' . '" />';

    $b['texts'][] = ':bpe09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpe09.png' . '" alt="' . ':bpe09:' . '" />';

    $b['texts'][] = ':bpe16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpe16.png' . '" alt="' . ':bpe16:' . '" />';

    $b['texts'][] = ':bpe22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpe22.png' . '" alt="' . ':bpe22:' . '" />';

    $b['texts'][] = ':bpe69:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpe69.png' . '" alt="' . ':bpe69:' . '" />';

    $b['texts'][] = ':bpe70:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpe70.png' . '" alt="' . ':bpe70:' . '" />';

    $b['texts'][] = ':bpe74:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpe74.png' . '" alt="' . ':bpe74:' . '" />';

    $b['texts'][] = ':bpe94:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpe94.png' . '" alt="' . ':bpe94:' . '" />';

    $b['texts'][] = ':bpf00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpf00.png' . '" alt="' . ':bpf00:' . '" />';

    $b['texts'][] = ':bpf17:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpf17.png' . '" alt="' . ':bpf17:' . '" />';

    $b['texts'][] = ':bpf20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpf20.png' . '" alt="' . ':bpf20:' . '" />';

    $b['texts'][] = ':bpf66:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpf66.png' . '" alt="' . ':bpf66:' . '" />';

    $b['texts'][] = ':bpf75:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpf75.png' . '" alt="' . ':bpf75:' . '" />';

    $b['texts'][] = ':bpg03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg03.png' . '" alt="' . ':bpg03:' . '" />';

    $b['texts'][] = ':bpg04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg04.png' . '" alt="' . ':bpg04:' . '" />';

    $b['texts'][] = ':bpg06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg06.png' . '" alt="' . ':bpg06:' . '" />';

    $b['texts'][] = ':bpg09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg09.png' . '" alt="' . ':bpg09:' . '" />';

    $b['texts'][] = ':bpg34:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg34.png' . '" alt="' . ':bpg34:' . '" />';

    $b['texts'][] = ':bpg44:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg44.png' . '" alt="' . ':bpg44:' . '" />';

    $b['texts'][] = ':bpg46:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg46.png' . '" alt="' . ':bpg46:' . '" />';

    $b['texts'][] = ':bpg56:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg56.png' . '" alt="' . ':bpg56:' . '" />';

    $b['texts'][] = ':bpg73:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg73.png' . '" alt="' . ':bpg73:' . '" />';

    $b['texts'][] = ':bpg74:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg74.png' . '" alt="' . ':bpg74:' . '" />';

    $b['texts'][] = ':bpg75:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg75.png' . '" alt="' . ':bpg75:' . '" />';

    $b['texts'][] = ':bpg96:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpg96.png' . '" alt="' . ':bpg96:' . '" />';

    $b['texts'][] = ':bphotofinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bphotofinish.png' . '" alt="' . ':bphotofinish:' . '" />';

    $b['texts'][] = ':bpieflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpieflip.png' . '" alt="' . ':bpieflip:' . '" />';

    $b['texts'][] = ':bpinkamina:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpinkamina.png' . '" alt="' . ':bpinkamina:' . '" />';

    $b['texts'][] = ':bpinkiefear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpinkiefear.png' . '" alt="' . ':bpinkiefear:' . '" />';

    $b['texts'][] = ':bppboring:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bppboring.png' . '" alt="' . ':bppboring:' . '" />';

    $b['texts'][] = ':bppfear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bppfear.png' . '" alt="' . ':bppfear:' . '" />';

    $b['texts'][] = ':bppfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bppfun.png' . '" alt="' . ':bppfun:' . '" />';

    $b['texts'][] = ':bppseesyou:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bppseesyou.png' . '" alt="' . ':bppseesyou:' . '" />';

    $b['texts'][] = ':bppshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bppshrug.png' . '" alt="' . ':bppshrug:' . '" />';

    $b['texts'][] = ':bpriceless:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpriceless.png' . '" alt="' . ':bpriceless:' . '" />';

    $b['texts'][] = ':bpunchdrunk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bpunchdrunk.png' . '" alt="' . ':bpunchdrunk:' . '" />';

    $b['texts'][] = ':bqueenmeanie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bqueenmeanie.png' . '" alt="' . ':bqueenmeanie:' . '" />';

    $b['texts'][] = ':bra00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra00.png' . '" alt="' . ':bra00:' . '" />';

    $b['texts'][] = ':bra01:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra01.png' . '" alt="' . ':bra01:' . '" />';

    $b['texts'][] = ':bra02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra02.png' . '" alt="' . ':bra02:' . '" />';

    $b['texts'][] = ':bra03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra03.png' . '" alt="' . ':bra03:' . '" />';

    $b['texts'][] = ':bra10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra10.png' . '" alt="' . ':bra10:' . '" />';

    $b['texts'][] = ':bra11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra11.png' . '" alt="' . ':bra11:' . '" />';

    $b['texts'][] = ':bra12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra12.png' . '" alt="' . ':bra12:' . '" />';

    $b['texts'][] = ':bra13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra13.png' . '" alt="' . ':bra13:' . '" />';

    $b['texts'][] = ':bra20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra20.png' . '" alt="' . ':bra20:' . '" />';

    $b['texts'][] = ':bra21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra21.png' . '" alt="' . ':bra21:' . '" />';

    $b['texts'][] = ':bra22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra22.png' . '" alt="' . ':bra22:' . '" />';

    $b['texts'][] = ':bra23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bra23.png' . '" alt="' . ':bra23:' . '" />';

    $b['texts'][] = ':brabsmile:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brabsmile.png' . '" alt="' . ':brabsmile:' . '" />';

    $b['texts'][] = ':brabwut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brabwut.png' . '" alt="' . ':brabwut:' . '" />';

    $b['texts'][] = ':braebend:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braebend.png' . '" alt="' . ':braebend:' . '" />';

    $b['texts'][] = ':braeburnpop:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braeburnpop.png' . '" alt="' . ':braeburnpop:' . '" />';

    $b['texts'][] = ':braeburnrope:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braeburnrope.png' . '" alt="' . ':braeburnrope:' . '" />';

    $b['texts'][] = ':braefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braefun.png' . '" alt="' . ':braefun:' . '" />';

    $b['texts'][] = ':brajcower:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brajcower.png' . '" alt="' . ':brajcower:' . '" />';

    $b['texts'][] = ':brajfrown:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brajfrown.png' . '" alt="' . ':brajfrown:' . '" />';

    $b['texts'][] = ':brajhappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brajhappy.png' . '" alt="' . ':brajhappy:' . '" />';

    $b['texts'][] = ':brajlie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brajlie.png' . '" alt="' . ':brajlie:' . '" />';

    $b['texts'][] = ':brajsly:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brajsly.png' . '" alt="' . ':brajsly:' . '" />';

    $b['texts'][] = ':brajugh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brajugh.png' . '" alt="' . ':brajugh:' . '" />';

    $b['texts'][] = ':brajwut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brajwut.png' . '" alt="' . ':brajwut:' . '" />';

    $b['texts'][] = ':brallmybits:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brallmybits.png' . '" alt="' . ':brallmybits:' . '" />';

    $b['texts'][] = ':brand:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brand.png' . '" alt="' . ':brand:' . '" />';

    $b['texts'][] = ':brangel:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brangel.png' . '" alt="' . ':brangel:' . '" />';

    $b['texts'][] = ':brarflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brarflip.png' . '" alt="' . ':brarflip:' . '" />';

    $b['texts'][] = ':brarfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brarfun.png' . '" alt="' . ':brarfun:' . '" />';

    $b['texts'][] = ':brarityannoyed:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brarityannoyed.png' . '" alt="' . ':brarityannoyed:' . '" />';

    $b['texts'][] = ':braritydaww:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braritydaww.png' . '" alt="' . ':braritydaww:' . '" />';

    $b['texts'][] = ':braritydress:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braritydress.png' . '" alt="' . ':braritydress:' . '" />';

    $b['texts'][] = ':brarityjudge:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brarityjudge.png' . '" alt="' . ':brarityjudge:' . '" />';

    $b['texts'][] = ':brarityprimp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brarityprimp.png' . '" alt="' . ':brarityprimp:' . '" />';

    $b['texts'][] = ':braritysad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braritysad.png' . '" alt="' . ':braritysad:' . '" />';

    $b['texts'][] = ':braritywhine:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braritywhine.png' . '" alt="' . ':braritywhine:' . '" />';

    $b['texts'][] = ':braritywhy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braritywhy.png' . '" alt="' . ':braritywhy:' . '" />';

    $b['texts'][] = ':braritywut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/braritywut.png' . '" alt="' . ':braritywut:' . '" />';

    $b['texts'][] = ':brarityyell:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brarityyell.png' . '" alt="' . ':brarityyell:' . '" />';

    $b['texts'][] = ':brb00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb00.png' . '" alt="' . ':brb00:' . '" />';

    $b['texts'][] = ':brb01:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb01.png' . '" alt="' . ':brb01:' . '" />';

    $b['texts'][] = ':brb02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb02.png' . '" alt="' . ':brb02:' . '" />';

    $b['texts'][] = ':brb03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb03.png' . '" alt="' . ':brb03:' . '" />';

    $b['texts'][] = ':brb04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb04.png' . '" alt="' . ':brb04:' . '" />';

    $b['texts'][] = ':brb05:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb05.png' . '" alt="' . ':brb05:' . '" />';

    $b['texts'][] = ':brb06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb06.png' . '" alt="' . ':brb06:' . '" />';

    $b['texts'][] = ':brb07:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb07.png' . '" alt="' . ':brb07:' . '" />';

    $b['texts'][] = ':brb08:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb08.png' . '" alt="' . ':brb08:' . '" />';

    $b['texts'][] = ':brb09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb09.png' . '" alt="' . ':brb09:' . '" />';

    $b['texts'][] = ':brb10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb10.png' . '" alt="' . ':brb10:' . '" />';

    $b['texts'][] = ':brb11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb11.png' . '" alt="' . ':brb11:' . '" />';

    $b['texts'][] = ':brb12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb12.png' . '" alt="' . ':brb12:' . '" />';

    $b['texts'][] = ':brb13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb13.png' . '" alt="' . ':brb13:' . '" />';

    $b['texts'][] = ':brb14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb14.png' . '" alt="' . ':brb14:' . '" />';

    $b['texts'][] = ':brb15:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb15.png' . '" alt="' . ':brb15:' . '" />';

    $b['texts'][] = ':brb16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb16.png' . '" alt="' . ':brb16:' . '" />';

    $b['texts'][] = ':brb17:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb17.png' . '" alt="' . ':brb17:' . '" />';

    $b['texts'][] = ':brb18:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb18.png' . '" alt="' . ':brb18:' . '" />';

    $b['texts'][] = ':brb19:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb19.png' . '" alt="' . ':brb19:' . '" />';

    $b['texts'][] = ':brb20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb20.png' . '" alt="' . ':brb20:' . '" />';

    $b['texts'][] = ':brb21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb21.png' . '" alt="' . ':brb21:' . '" />';

    $b['texts'][] = ':brb22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb22.png' . '" alt="' . ':brb22:' . '" />';

    $b['texts'][] = ':brb23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb23.png' . '" alt="' . ':brb23:' . '" />';

    $b['texts'][] = ':brb24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb24.png' . '" alt="' . ':brb24:' . '" />';

    $b['texts'][] = ':brb25:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb25.png' . '" alt="' . ':brb25:' . '" />';

    $b['texts'][] = ':brb26:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb26.png' . '" alt="' . ':brb26:' . '" />';

    $b['texts'][] = ':brb27:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb27.png' . '" alt="' . ':brb27:' . '" />';

    $b['texts'][] = ':brb28:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb28.png' . '" alt="' . ':brb28:' . '" />';

    $b['texts'][] = ':brb29:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb29.png' . '" alt="' . ':brb29:' . '" />';

    $b['texts'][] = ':brb30:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb30.png' . '" alt="' . ':brb30:' . '" />';

    $b['texts'][] = ':brb31:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb31.png' . '" alt="' . ':brb31:' . '" />';

    $b['texts'][] = ':brb32:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb32.png' . '" alt="' . ':brb32:' . '" />';

    $b['texts'][] = ':brb33:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb33.png' . '" alt="' . ':brb33:' . '" />';

    $b['texts'][] = ':brb34:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb34.png' . '" alt="' . ':brb34:' . '" />';

    $b['texts'][] = ':brb35:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb35.png' . '" alt="' . ':brb35:' . '" />';

    $b['texts'][] = ':brb36:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb36.png' . '" alt="' . ':brb36:' . '" />';

    $b['texts'][] = ':brb37:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb37.png' . '" alt="' . ':brb37:' . '" />';

    $b['texts'][] = ':brb38:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb38.png' . '" alt="' . ':brb38:' . '" />';

    $b['texts'][] = ':brb39:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brb39.png' . '" alt="' . ':brb39:' . '" />';

    $b['texts'][] = ':brberry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brberry.png' . '" alt="' . ':brberry:' . '" />';

    $b['texts'][] = ':brblacksnooty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brblacksnooty.png' . '" alt="' . ':brblacksnooty:' . '" />';

    $b['texts'][] = ':brbonbon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brbonbon.png' . '" alt="' . ':brbonbon:' . '" />';

    $b['texts'][] = ':brc00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc00.png' . '" alt="' . ':brc00:' . '" />';

    $b['texts'][] = ':brc01:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc01.png' . '" alt="' . ':brc01:' . '" />';

    $b['texts'][] = ':brc02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc02.png' . '" alt="' . ':brc02:' . '" />';

    $b['texts'][] = ':brc03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc03.png' . '" alt="' . ':brc03:' . '" />';

    $b['texts'][] = ':brc04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc04.png' . '" alt="' . ':brc04:' . '" />';

    $b['texts'][] = ':brc05:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc05.png' . '" alt="' . ':brc05:' . '" />';

    $b['texts'][] = ':brc06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc06.png' . '" alt="' . ':brc06:' . '" />';

    $b['texts'][] = ':brc07:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc07.png' . '" alt="' . ':brc07:' . '" />';

    $b['texts'][] = ':brc08:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc08.png' . '" alt="' . ':brc08:' . '" />';

    $b['texts'][] = ':brc09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc09.png' . '" alt="' . ':brc09:' . '" />';

    $b['texts'][] = ':brc10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc10.png' . '" alt="' . ':brc10:' . '" />';

    $b['texts'][] = ':brc11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc11.png' . '" alt="' . ':brc11:' . '" />';

    $b['texts'][] = ':brc12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc12.png' . '" alt="' . ':brc12:' . '" />';

    $b['texts'][] = ':brc13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc13.png' . '" alt="' . ':brc13:' . '" />';

    $b['texts'][] = ':brc14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc14.png' . '" alt="' . ':brc14:' . '" />';

    $b['texts'][] = ':brc15:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc15.png' . '" alt="' . ':brc15:' . '" />';

    $b['texts'][] = ':brc16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc16.png' . '" alt="' . ':brc16:' . '" />';

    $b['texts'][] = ':brc17:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc17.png' . '" alt="' . ':brc17:' . '" />';

    $b['texts'][] = ':brc18:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc18.png' . '" alt="' . ':brc18:' . '" />';

    $b['texts'][] = ':brc19:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc19.png' . '" alt="' . ':brc19:' . '" />';

    $b['texts'][] = ':brc20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc20.png' . '" alt="' . ':brc20:' . '" />';

    $b['texts'][] = ':brc21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc21.png' . '" alt="' . ':brc21:' . '" />';

    $b['texts'][] = ':brc22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc22.png' . '" alt="' . ':brc22:' . '" />';

    $b['texts'][] = ':brc23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc23.png' . '" alt="' . ':brc23:' . '" />';

    $b['texts'][] = ':brc24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc24.png' . '" alt="' . ':brc24:' . '" />';

    $b['texts'][] = ':brc25:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc25.png' . '" alt="' . ':brc25:' . '" />';

    $b['texts'][] = ':brc26:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc26.png' . '" alt="' . ':brc26:' . '" />';

    $b['texts'][] = ':brc27:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc27.png' . '" alt="' . ':brc27:' . '" />';

    $b['texts'][] = ':brc28:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc28.png' . '" alt="' . ':brc28:' . '" />';

    $b['texts'][] = ':brc29:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brc29.png' . '" alt="' . ':brc29:' . '" />';

    $b['texts'][] = ':brcelestiamad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brcelestiamad.png' . '" alt="' . ':brcelestiamad:' . '" />';

    $b['texts'][] = ':brcelestia:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brcelestia.png' . '" alt="' . ':brcelestia:' . '" />';

    $b['texts'][] = ':brcheerilee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brcheerilee.png' . '" alt="' . ':brcheerilee:' . '" />';

    $b['texts'][] = ':brcockatrice:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brcockatrice.png' . '" alt="' . ':brcockatrice:' . '" />';

    $b['texts'][] = ':brcolgate:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brcolgate.png' . '" alt="' . ':brcolgate:' . '" />';

    $b['texts'][] = ':brcutealoo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brcutealoo.png' . '" alt="' . ':brcutealoo:' . '" />';

    $b['texts'][] = ':brdannoyed:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdannoyed.png' . '" alt="' . ':brdannoyed:' . '" />';

    $b['texts'][] = ':brdcool:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdcool.png' . '" alt="' . ':brdcool:' . '" />';

    $b['texts'][] = ':brdealwithit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdealwithit.png' . '" alt="' . ':brdealwithit:' . '" />';

    $b['texts'][] = ':brderpflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brderpflip.png' . '" alt="' . ':brderpflip:' . '" />';

    $b['texts'][] = ':brderp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brderp.png' . '" alt="' . ':brderp:' . '" />';

    $b['texts'][] = ':brderpwizard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brderpwizard.png' . '" alt="' . ':brderpwizard:' . '" />';

    $b['texts'][] = ':brderpyhappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brderpyhappy.png' . '" alt="' . ':brderpyhappy:' . '" />';

    $b['texts'][] = ':brderpyshock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brderpyshock.png' . '" alt="' . ':brderpyshock:' . '" />';

    $b['texts'][] = ':brdhappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdhappy.png' . '" alt="' . ':brdhappy:' . '" />';

    $b['texts'][] = ':brdhuh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdhuh.png' . '" alt="' . ':brdhuh:' . '" />';

    $b['texts'][] = ':brdj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdj.png' . '" alt="' . ':brdj:' . '" />';

    $b['texts'][] = ':brdsalute:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdsalute.png' . '" alt="' . ':brdsalute:' . '" />';

    $b['texts'][] = ':brdsitting:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdsitting.png' . '" alt="' . ':brdsitting:' . '" />';

    $b['texts'][] = ':brdsmile:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdsmile.png' . '" alt="' . ':brdsmile:' . '" />';

    $b['texts'][] = ':brdumbfabric:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdumbfabric.png' . '" alt="' . ':brdumbfabric:' . '" />';

    $b['texts'][] = ':brdwut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brdwut.png' . '" alt="' . ':brdwut:' . '" />';

    $b['texts'][] = ':breeyup:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/breeyup.png' . '" alt="' . ':breeyup:' . '" />';

    $b['texts'][] = ':brfabulous:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brfabulous.png' . '" alt="' . ':brfabulous:' . '" />';

    $b['texts'][] = ':brfacehoof:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brfacehoof.png' . '" alt="' . ':brfacehoof:' . '" />';

    $b['texts'][] = ':brfillytgap:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brfillytgap.png' . '" alt="' . ':brfillytgap:' . '" />';

    $b['texts'][] = ':brflutterblush:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brflutterblush.png' . '" alt="' . ':brflutterblush:' . '" />';

    $b['texts'][] = ':brflutterfear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brflutterfear.png' . '" alt="' . ':brflutterfear:' . '" />';

    $b['texts'][] = ':brflutterjerk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brflutterjerk.png' . '" alt="' . ':brflutterjerk:' . '" />';

    $b['texts'][] = ':brfluttershh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brfluttershh.png' . '" alt="' . ':brfluttershh:' . '" />';

    $b['texts'][] = ':brfluttershy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brfluttershy.png' . '" alt="' . ':brfluttershy:' . '" />';

    $b['texts'][] = ':brfluttersrs:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brfluttersrs.png' . '" alt="' . ':brfluttersrs:' . '" />';

    $b['texts'][] = ':brflutterwink:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brflutterwink.png' . '" alt="' . ':brflutterwink:' . '" />';

    $b['texts'][] = ':brflutteryay:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brflutteryay.png' . '" alt="' . ':brflutteryay:' . '" />';

    $b['texts'][] = ':brgross:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brgross.png' . '" alt="' . ':brgross:' . '" />';

    $b['texts'][] = ':brhahaha:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brhahaha.png' . '" alt="' . ':brhahaha:' . '" />';

    $b['texts'][] = ':brhapplejack:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brhapplejack.png' . '" alt="' . ':brhapplejack:' . '" />';

    $b['texts'][] = ':brhappyluna:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brhappyluna.png' . '" alt="' . ':brhappyluna:' . '" />';

    $b['texts'][] = ':brhmmm:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brhmmm.png' . '" alt="' . ':brhmmm:' . '" />';

    $b['texts'][] = ':brhokeysmokes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brhokeysmokes.png' . '" alt="' . ':brhokeysmokes:' . '" />';

    $b['texts'][] = ':brhuhhuh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brhuhhuh.png' . '" alt="' . ':brhuhhuh:' . '" />';

    $b['texts'][] = ':brick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brick.png' . '" alt="' . ':brick:' . '" />';

    $b['texts'][] = ':bringingsexyrap:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bringingsexyrap.png' . '" alt="' . ':bringingsexyrap:' . '" />';

    $b['texts'][] = ':brjoy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brjoy.png' . '" alt="' . ':brjoy:' . '" />';

    $b['texts'][] = ':brl00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brl00.png' . '" alt="' . ':brl00:' . '" />';

    $b['texts'][] = ':brlouder:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brlouder.png' . '" alt="' . ':brlouder:' . '" />';

    $b['texts'][] = ':brloveme:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brloveme.png' . '" alt="' . ':brloveme:' . '" />';

    $b['texts'][] = ':brlunagasp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brlunagasp.png' . '" alt="' . ':brlunagasp:' . '" />';

    $b['texts'][] = ':brlunahappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brlunahappy.png' . '" alt="' . ':brlunahappy:' . '" />';

    $b['texts'][] = ':brlunasad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brlunasad.png' . '" alt="' . ':brlunasad:' . '" />';

    $b['texts'][] = ':brlunateehee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brlunateehee.png' . '" alt="' . ':brlunateehee:' . '" />';

    $b['texts'][] = ':brlunawait:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brlunawait.png' . '" alt="' . ':brlunawait:' . '" />';

    $b['texts'][] = ':brlyra:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brlyra.png' . '" alt="' . ':brlyra:' . '" />';

    $b['texts'][] = ':brmanspike:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brmanspike.png' . '" alt="' . ':brmanspike:' . '" />';

    $b['texts'][] = ':brnewrainbowdash:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brnewrainbowdash.png' . '" alt="' . ':brnewrainbowdash:' . '" />';

    $b['texts'][] = ':brnmm:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brnmm.png' . '" alt="' . ':brnmm:' . '" />';

    $b['texts'][] = ':brnoooo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brnoooo.png' . '" alt="' . ':brnoooo:' . '" />';

    $b['texts'][] = ':broctavia:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/broctavia.png' . '" alt="' . ':broctavia:' . '" />';

    $b['texts'][] = ':brody2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brody2.png' . '" alt="' . ':brody2:' . '" />';

    $b['texts'][] = ':brodyhover:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brodyhover.png' . '" alt="' . ':brodyhover:' . '" />';

    $b['texts'][] = ':brody:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brody.png' . '" alt="' . ':brody:' . '" />';

    $b['texts'][] = ':brohhi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brohhi.png' . '" alt="' . ':brohhi:' . '" />';

    $b['texts'][] = ':bro:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bro.png' . '" alt="' . ':bro:' . '" />';

    $b['texts'][] = ':broseflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/broseflip.png' . '" alt="' . ':broseflip:' . '" />';

    $b['texts'][] = ':brosefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brosefun.png' . '" alt="' . ':brosefun:' . '" />';

    $b['texts'][] = ':brpaperbagderpy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brpaperbagderpy.png' . '" alt="' . ':brpaperbagderpy:' . '" />';

    $b['texts'][] = ':brpaperbagwizard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brpaperbagwizard.png' . '" alt="' . ':brpaperbagwizard:' . '" />';

    $b['texts'][] = ':brparty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brparty.png' . '" alt="' . ':brparty:' . '" />';

    $b['texts'][] = ':brphotofinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brphotofinish.png' . '" alt="' . ':brphotofinish:' . '" />';

    $b['texts'][] = ':brpinkamina:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brpinkamina.png' . '" alt="' . ':brpinkamina:' . '" />';

    $b['texts'][] = ':brpinkiefear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brpinkiefear.png' . '" alt="' . ':brpinkiefear:' . '" />';

    $b['texts'][] = ':brppboring:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brppboring.png' . '" alt="' . ':brppboring:' . '" />';

    $b['texts'][] = ':brppfear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brppfear.png' . '" alt="' . ':brppfear:' . '" />';

    $b['texts'][] = ':brppseesyou:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brppseesyou.png' . '" alt="' . ':brppseesyou:' . '" />';

    $b['texts'][] = ':brppshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brppshrug.png' . '" alt="' . ':brppshrug:' . '" />';

    $b['texts'][] = ':brpriceless:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brpriceless.png' . '" alt="' . ':brpriceless:' . '" />';

    $b['texts'][] = ':brpunchdrunk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brpunchdrunk.png' . '" alt="' . ':brpunchdrunk:' . '" />';

    $b['texts'][] = ':brqueenmeanie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brqueenmeanie.png' . '" alt="' . ':brqueenmeanie:' . '" />';

    $b['texts'][] = ':brrarityannoyed:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrarityannoyed.png' . '" alt="' . ':brrarityannoyed:' . '" />';

    $b['texts'][] = ':brraritydress:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brraritydress.png' . '" alt="' . ':brraritydress:' . '" />';

    $b['texts'][] = ':brrarityjudge:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrarityjudge.png' . '" alt="' . ':brrarityjudge:' . '" />';

    $b['texts'][] = ':brrarityprimp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrarityprimp.png' . '" alt="' . ':brrarityprimp:' . '" />';

    $b['texts'][] = ':brraritysad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brraritysad.png' . '" alt="' . ':brraritysad:' . '" />';

    $b['texts'][] = ':brraritywhine:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brraritywhine.png' . '" alt="' . ':brraritywhine:' . '" />';

    $b['texts'][] = ':brraritywhy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brraritywhy.png' . '" alt="' . ':brraritywhy:' . '" />';

    $b['texts'][] = ':brraritywut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brraritywut.png' . '" alt="' . ':brraritywut:' . '" />';

    $b['texts'][] = ':brrarityyell:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrarityyell.png' . '" alt="' . ':brrarityyell:' . '" />';

    $b['texts'][] = ':brrdannoyed:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrdannoyed.png' . '" alt="' . ':brrdannoyed:' . '" />';

    $b['texts'][] = ':brrdcool:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrdcool.png' . '" alt="' . ':brrdcool:' . '" />';

    $b['texts'][] = ':brrdhappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrdhappy.png' . '" alt="' . ':brrdhappy:' . '" />';

    $b['texts'][] = ':brrdhuh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrdhuh.png' . '" alt="' . ':brrdhuh:' . '" />';

    $b['texts'][] = ':brrdsalute:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrdsalute.png' . '" alt="' . ':brrdsalute:' . '" />';

    $b['texts'][] = ':brrdsitting:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrdsitting.png' . '" alt="' . ':brrdsitting:' . '" />';

    $b['texts'][] = ':brrdsmile:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrdsmile.png' . '" alt="' . ':brrdsmile:' . '" />';

    $b['texts'][] = ':brrdwut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brrdwut.png' . '" alt="' . ':brrdwut:' . '" />';

    $b['texts'][] = ':brsbstare:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brsbstare.png' . '" alt="' . ':brsbstare:' . '" />';

    $b['texts'][] = ':brscootaloo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brscootaloo.png' . '" alt="' . ':brscootaloo:' . '" />';

    $b['texts'][] = ':brsnails:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brsnails.png' . '" alt="' . ':brsnails:' . '" />';

    $b['texts'][] = ':brsoawesome:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brsoawesome.png' . '" alt="' . ':brsoawesome:' . '" />';

    $b['texts'][] = ':brsotrue:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brsotrue.png' . '" alt="' . ':brsotrue:' . '" />';

    $b['texts'][] = ':brspikenervous:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brspikenervous.png' . '" alt="' . ':brspikenervous:' . '" />';

    $b['texts'][] = ':brspikepushy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brspikepushy.png' . '" alt="' . ':brspikepushy:' . '" />';

    $b['texts'][] = ':brspitfire:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brspitfire.png' . '" alt="' . ':brspitfire:' . '" />';

    $b['texts'][] = ':brsquintyjack:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brsquintyjack.png' . '" alt="' . ':brsquintyjack:' . '" />';

    $b['texts'][] = ':brt00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brt00.png' . '" alt="' . ':brt00:' . '" />';

    $b['texts'][] = ':brtakealetter:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtakealetter.png' . '" alt="' . ':brtakealetter:' . '" />';

    $b['texts'][] = ':brthreedog:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brthreedog.png' . '" alt="' . ':brthreedog:' . '" />';

    $b['texts'][] = ':brtrixiesmug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtrixiesmug.png' . '" alt="' . ':brtrixiesmug:' . '" />';

    $b['texts'][] = ':brtwibeam:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtwibeam.png' . '" alt="' . ':brtwibeam:' . '" />';

    $b['texts'][] = ':brtwicrazy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtwicrazy.png' . '" alt="' . ':brtwicrazy:' . '" />';

    $b['texts'][] = ':brtwipride:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtwipride.png' . '" alt="' . ':brtwipride:' . '" />';

    $b['texts'][] = ':brtwirage:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtwirage.png' . '" alt="' . ':brtwirage:' . '" />';

    $b['texts'][] = ':brtwismile:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtwismile.png' . '" alt="' . ':brtwismile:' . '" />';

    $b['texts'][] = ':brtwismug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtwismug.png' . '" alt="' . ':brtwismug:' . '" />';

    $b['texts'][] = ':brtwisquint:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtwisquint.png' . '" alt="' . ':brtwisquint:' . '" />';

    $b['texts'][] = ':brtwistare:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brtwistare.png' . '" alt="' . ':brtwistare:' . '" />';

    $b['texts'][] = ':brushmyass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brushmyass.png' . '" alt="' . ':brushmyass:' . '" />';

    $b['texts'][] = ':brwahaha:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brwahaha.png' . '" alt="' . ':brwahaha:' . '" />';

    $b['texts'][] = ':brwhooves:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brwhooves.png' . '" alt="' . ':brwhooves:' . '" />';

    $b['texts'][] = ':bryvoodfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bryvoodfun.png' . '" alt="' . ':bryvoodfun:' . '" />';

    $b['texts'][] = ':brzecora:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/brzecora.png' . '" alt="' . ':brzecora:' . '" />';

    $b['texts'][] = ':bsbflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bsbflip.png' . '" alt="' . ':bsbflip:' . '" />';

    $b['texts'][] = ':bsbstare:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bsbstare.png' . '" alt="' . ':bsbstare:' . '" />';

    $b['texts'][] = ':bscootacheer:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bscootacheer.png' . '" alt="' . ':bscootacheer:' . '" />';

    $b['texts'][] = ':bscootaloo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bscootaloo.png' . '" alt="' . ':bscootaloo:' . '" />';

    $b['texts'][] = ':bscootflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bscootflip.png' . '" alt="' . ':bscootflip:' . '" />';

    $b['texts'][] = ':bshyflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bshyflip.png' . '" alt="' . ':bshyflip:' . '" />';

    $b['texts'][] = ':bshyfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bshyfun.png' . '" alt="' . ':bshyfun:' . '" />';

    $b['texts'][] = ':bsnails:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bsnails.png' . '" alt="' . ':bsnails:' . '" />';

    $b['texts'][] = ':bsoawesome:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bsoawesome.png' . '" alt="' . ':bsoawesome:' . '" />';

    $b['texts'][] = ':bsotrue:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bsotrue.png' . '" alt="' . ':bsotrue:' . '" />';

    $b['texts'][] = ':bspikegnat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bspikegnat.png' . '" alt="' . ':bspikegnat:' . '" />';

    $b['texts'][] = ':bspikenervous:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bspikenervous.png' . '" alt="' . ':bspikenervous:' . '" />';

    $b['texts'][] = ':bspikepushy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bspikepushy.png' . '" alt="' . ':bspikepushy:' . '" />';

    $b['texts'][] = ':bspitfire:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bspitfire.png' . '" alt="' . ':bspitfire:' . '" />';

    $b['texts'][] = ':bsquintyjack:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bsquintyjack.png' . '" alt="' . ':bsquintyjack:' . '" />';

    $b['texts'][] = ':bswagintosh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bswagintosh.png' . '" alt="' . ':bswagintosh:' . '" />';

    $b['texts'][] = ':bt00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bt00.png' . '" alt="' . ':bt00:' . '" />';

    $b['texts'][] = ':btakealetter:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btakealetter.png' . '" alt="' . ':btakealetter:' . '" />';

    $b['texts'][] = ':bthehorror:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bthehorror.png' . '" alt="' . ':bthehorror:' . '" />';

    $b['texts'][] = ':bthreedog:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bthreedog.png' . '" alt="' . ':bthreedog:' . '" />';

    $b['texts'][] = ':btiaflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btiaflip.png' . '" alt="' . ':btiaflip:' . '" />';

    $b['texts'][] = ':btrixfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btrixfun.png' . '" alt="' . ':btrixfun:' . '" />';

    $b['texts'][] = ':btrixiesmug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btrixiesmug.png' . '" alt="' . ':btrixiesmug:' . '" />';

    $b['texts'][] = ':btwibeam:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btwibeam.png' . '" alt="' . ':btwibeam:' . '" />';

    $b['texts'][] = ':btwicrazy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btwicrazy.png' . '" alt="' . ':btwicrazy:' . '" />';

    $b['texts'][] = ':btwipride:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btwipride.png' . '" alt="' . ':btwipride:' . '" />';

    $b['texts'][] = ':btwirage:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btwirage.png' . '" alt="' . ':btwirage:' . '" />';

    $b['texts'][] = ':btwismile:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btwismile.png' . '" alt="' . ':btwismile:' . '" />';

    $b['texts'][] = ':btwismug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btwismug.png' . '" alt="' . ':btwismug:' . '" />';

    $b['texts'][] = ':btwisquint:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btwisquint.png' . '" alt="' . ':btwisquint:' . '" />';

    $b['texts'][] = ':btwistare:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/btwistare.png' . '" alt="' . ':btwistare:' . '" />';

    $b['texts'][] = ':bugs:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bugs.png' . '" alt="' . ':bugs:' . '" />';

    $b['texts'][] = ':burchy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/burchy.png' . '" alt="' . ':burchy:' . '" />';

    $b['texts'][] = ':burg:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/burg.png' . '" alt="' . ':burg:' . '" />';

    $b['texts'][] = ':busted:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/busted.png' . '" alt="' . ':busted:' . '" />';

    $b['texts'][] = ':buzzkillturtle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/buzzkillturtle.png' . '" alt="' . ':buzzkillturtle:' . '" />';

    $b['texts'][] = ':buzz:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/buzz.png' . '" alt="' . ':buzz:' . '" />';

    $b['texts'][] = ':bwahaha:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bwahaha.png' . '" alt="' . ':bwahaha:' . '" />';

    $b['texts'][] = ':bwhooves:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bwhooves.png' . '" alt="' . ':bwhooves:' . '" />';

    $b['texts'][] = ':bzecora:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/bzecora.png' . '" alt="' . ':bzecora:' . '" />';

    $b['texts'][] = ':cadancebj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cadancebj.png' . '" alt="' . ':cadancebj:' . '" />';

    $b['texts'][] = ':cadgym:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cadgym.png' . '" alt="' . ':cadgym:' . '" />';

    $b['texts'][] = ':calmyourtits:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/calmyourtits.png' . '" alt="' . ':calmyourtits:' . '" />';

    $b['texts'][] = ':carrotfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/carrotfun.png' . '" alt="' . ':carrotfun:' . '" />';

    $b['texts'][] = ':carrottopfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/carrottopfun.png' . '" alt="' . ':carrottopfun:' . '" />';

    $b['texts'][] = ':catbug1:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catbug1.png' . '" alt="' . ':catbug1:' . '" />';

    $b['texts'][] = ':catbug2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catbug2.png' . '" alt="' . ':catbug2:' . '" />';

    $b['texts'][] = ':catbug3:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catbug3.png' . '" alt="' . ':catbug3:' . '" />';

    $b['texts'][] = ':catbug4:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catbug4.png' . '" alt="' . ':catbug4:' . '" />';

    $b['texts'][] = ':catbug5:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catbug5.png' . '" alt="' . ':catbug5:' . '" />';

    $b['texts'][] = ':catbug6:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catbug6.png' . '" alt="' . ':catbug6:' . '" />';

    $b['texts'][] = ':catbug7:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catbug7.png' . '" alt="' . ':catbug7:' . '" />';

    $b['texts'][] = ':catleaves:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catleaves.png' . '" alt="' . ':catleaves:' . '" />';

    $b['texts'][] = ':catomato:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catomato.png' . '" alt="' . ':catomato:' . '" />';

    $b['texts'][] = ':catplanetfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catplanetfun.png' . '" alt="' . ':catplanetfun:' . '" />';

    $b['texts'][] = ':catplanet:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/catplanet.png' . '" alt="' . ':catplanet:' . '" />';

    $b['texts'][] = ':cccheer:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cccheer.png' . '" alt="' . ':cccheer:' . '" />';

    $b['texts'][] = ':ccfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ccfun.png' . '" alt="' . ':ccfun:' . '" />';

    $b['texts'][] = ':ceilingsquid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ceilingsquid.png' . '" alt="' . ':ceilingsquid:' . '" />';

    $b['texts'][] = ':celestbj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/celestbj.png' . '" alt="' . ':celestbj:' . '" />';

    $b['texts'][] = ':celestiafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/celestiafun.png' . '" alt="' . ':celestiafun:' . '" />';

    $b['texts'][] = ':celestiapresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/celestiapresents.png' . '" alt="' . ':celestiapresents:' . '" />';

    $b['texts'][] = ':cellyshy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cellyshy.png' . '" alt="' . ':cellyshy:' . '" />';

    $b['texts'][] = ':celordv:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/celordv.png' . '" alt="' . ':celordv:' . '" />';

    $b['texts'][] = ':chaoticgenes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/chaoticgenes.png' . '" alt="' . ':chaoticgenes:' . '" />';

    $b['texts'][] = ':characreepy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/characreepy.png' . '" alt="' . ':characreepy:' . '" />';

    $b['texts'][] = ':charanochocolate:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/charanochocolate.png' . '" alt="' . ':charanochocolate:' . '" />';

    $b['texts'][] = ':chara:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/chara.png' . '" alt="' . ':chara:' . '" />';

    $b['texts'][] = ':charatheoneincontrol:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/charatheoneincontrol.png' . '" alt="' . ':charatheoneincontrol:' . '" />';

    $b['texts'][] = ':charliefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/charliefun.png' . '" alt="' . ':charliefun:' . '" />';

    $b['texts'][] = ':chasercorn:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/chasercorn.png' . '" alt="' . ':chasercorn:' . '" />';

    $b['texts'][] = ':chaserdance:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/chaserdance.png' . '" alt="' . ':chaserdance:' . '" />';

    $b['texts'][] = ':cheerfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cheerfun.png' . '" alt="' . ':cheerfun:' . '" />';

    $b['texts'][] = ':cheesemoo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cheesemoo.png' . '" alt="' . ':cheesemoo:' . '" />';

    $b['texts'][] = ':cheesepizza:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cheesepizza.png' . '" alt="' . ':cheesepizza:' . '" />';

    $b['texts'][] = ':cheesesocks:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cheesesocks.png' . '" alt="' . ':cheesesocks:' . '" />';

    $b['texts'][] = ':cheesu:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cheesu.png' . '" alt="' . ':cheesu:' . '" />';

    $b['texts'][] = ':cherry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cherry.png' . '" alt="' . ':cherry:' . '" />';

    $b['texts'][] = ':chinesenewyear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/chinesenewyear.png' . '" alt="' . ':chinesenewyear:' . '" />';

    $b['texts'][] = ':chivmount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/chivmount.png' . '" alt="' . ':chivmount:' . '" />';

    $b['texts'][] = ':chrysalispresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/chrysalispresents.png' . '" alt="' . ':chrysalispresents:' . '" />';

    $b['texts'][] = ':cl00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cl00.png' . '" alt="' . ':cl00:' . '" />';

    $b['texts'][] = ':clamyam:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/clamyam.png' . '" alt="' . ':clamyam:' . '" />';

    $b['texts'][] = ':classyhumantavi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/classyhumantavi.png' . '" alt="' . ':classyhumantavi:' . '" />';

    $b['texts'][] = ':cleanfloor:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cleanfloor.png' . '" alt="' . ':cleanfloor:' . '" />';

    $b['texts'][] = ':clickityhackbacktrack:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/clickityhackbacktrack.png' . '" alt="' . ':clickityhackbacktrack:' . '" />';

    $b['texts'][] = ':clickyclicky:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/clickyclicky.png' . '" alt="' . ':clickyclicky:' . '" />';

    $b['texts'][] = ':clop44:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/clop44.png' . '" alt="' . ':clop44:' . '" />';

    $b['texts'][] = ':clopclopclop:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/clopclopclop.png' . '" alt="' . ':clopclopclop:' . '" />';

    $b['texts'][] = ':cmonanon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cmonanon.png' . '" alt="' . ':cmonanon:' . '" />';

    $b['texts'][] = ':cockatiel:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cockatiel.png' . '" alt="' . ':cockatiel:' . '" />';

    $b['texts'][] = ':coconutmonkey:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/coconutmonkey.png' . '" alt="' . ':coconutmonkey:' . '" />';

    $b['texts'][] = ':coggler:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/coggler.png' . '" alt="' . ':coggler:' . '" />';

    $b['texts'][] = ':colgatepresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/colgatepresents.png' . '" alt="' . ':colgatepresents:' . '" />';

    $b['texts'][] = ':conan:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/conan.png' . '" alt="' . ':conan:' . '" />';

    $b['texts'][] = ':confirmed:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/confirmed.png' . '" alt="' . ':confirmed:' . '" />';

    $b['texts'][] = ':congratulationsyouraccountisnowenabledforuploadslongerthanfifteenminutes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/congratulationsyouraccountisnowenabledforuploadslongerthanfifteenminutes.png' . '" alt="' . ':congratulationsyouraccountisnowenabledforuploadslongerthanfifteenminutes:' . '" />';

    $b['texts'][] = ':conkycool:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/conkycool.png' . '" alt="' . ':conkycool:' . '" />';

    $b['texts'][] = ':conkyfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/conkyfun.png' . '" alt="' . ':conkyfun:' . '" />';

    $b['texts'][] = ':conky:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/conky.png' . '" alt="' . ':conky:' . '" />';

    $b['texts'][] = ':cosbeh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cosbeh.png' . '" alt="' . ':cosbeh:' . '" />';

    $b['texts'][] = ':couchflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/couchflip.png' . '" alt="' . ':couchflip:' . '" />';

    $b['texts'][] = ':coybear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/coybear.png' . '" alt="' . ':coybear:' . '" />';

    $b['texts'][] = ':craft03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/craft03.png' . '" alt="' . ':craft03:' . '" />';

    $b['texts'][] = ':craftshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/craftshrug.png' . '" alt="' . ':craftshrug:' . '" />';

    $b['texts'][] = ':creammuffin:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/creammuffin.png' . '" alt="' . ':creammuffin:' . '" />';

    $b['texts'][] = ':creamparty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/creamparty.png' . '" alt="' . ':creamparty:' . '" />';

    $b['texts'][] = ':crunchy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/crunchy.png' . '" alt="' . ':crunchy:' . '" />';

    $b['texts'][] = ':cupcake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/cupcake.png' . '" alt="' . ':cupcake:' . '" />';

    $b['texts'][] = ':da07:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/da07.png' . '" alt="' . ':da07:' . '" />';

    $b['texts'][] = ':da16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/da16.png' . '" alt="' . ':da16:' . '" />';

    $b['texts'][] = ':DAAAN:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/DAAAN.png' . '" alt="' . ':DAAAN:' . '" />';

    $b['texts'][] = ':daftworth:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/daftworth.png' . '" alt="' . ':daftworth:' . '" />';

    $b['texts'][] = ':dalek:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dalek.png' . '" alt="' . ':dalek:' . '" />';

    $b['texts'][] = ':damn:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/damn.png' . '" alt="' . ':damn:' . '" />';

    $b['texts'][] = ':dam:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dam.png' . '" alt="' . ':dam:' . '" />';

    $b['texts'][] = ':dancane:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dancane.png' . '" alt="' . ':dancane:' . '" />';

    $b['texts'][] = ':danshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/danshrug.png' . '" alt="' . ':danshrug:' . '" />';

    $b['texts'][] = ':danvs:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/danvs.png' . '" alt="' . ':danvs:' . '" />';

    $b['texts'][] = ':daringfinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/daringfinish.png' . '" alt="' . ':daringfinish:' . '" />';

    $b['texts'][] = ':darkfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/darkfun.png' . '" alt="' . ':darkfun:' . '" />';

    $b['texts'][] = ':darklefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/darklefun.png' . '" alt="' . ':darklefun:' . '" />';

    $b['texts'][] = ':DarqWolff:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/DarqWolff.png' . '" alt="' . ':DarqWolff:' . '" />';

    $b['texts'][] = ':dashfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dashfun.png' . '" alt="' . ':dashfun:' . '" />';

    $b['texts'][] = ':dashurbate:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dashurbate.png' . '" alt="' . ':dashurbate:' . '" />';

    $b['texts'][] = ':datass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/datass.png' . '" alt="' . ':datass:' . '" />';

    $b['texts'][] = ':deaugh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/deaugh.png' . '" alt="' . ':deaugh:' . '" />';

    $b['texts'][] = ':degeso:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/degeso.png' . '" alt="' . ':degeso:' . '" />';

    $b['texts'][] = ':deranimated:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/deranimated.png' . '" alt="' . ':deranimated:' . '" />';

    $b['texts'][] = ':derpbow:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/derpbow.png' . '" alt="' . ':derpbow:' . '" />';

    $b['texts'][] = ':derpfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/derpfun.png' . '" alt="' . ':derpfun:' . '" />';

    $b['texts'][] = ':derpyready:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/derpyready.png' . '" alt="' . ':derpyready:' . '" />';

    $b['texts'][] = ':derpyshake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/derpyshake.png' . '" alt="' . ':derpyshake:' . '" />';

    $b['texts'][] = ':deslosex:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/deslosex.png' . '" alt="' . ':deslosex:' . '" />';

    $b['texts'][] = ':developersdevelopersdevelopersdevelopers:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/developersdevelopersdevelopersdevelopers.png' . '" alt="' . ':developersdevelopersdevelopersdevelopers:' . '" />';

    $b['texts'][] = ':dinkleberg:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dinkleberg.png' . '" alt="' . ':dinkleberg:' . '" />';

    $b['texts'][] = ':dinoshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dinoshrug.png' . '" alt="' . ':dinoshrug:' . '" />';

    $b['texts'][] = ':dirtypinkie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dirtypinkie.png' . '" alt="' . ':dirtypinkie:' . '" />';

    $b['texts'][] = ':disalot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/disalot.png' . '" alt="' . ':disalot:' . '" />';

    $b['texts'][] = ':disbanana:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/disbanana.png' . '" alt="' . ':disbanana:' . '" />';

    $b['texts'][] = ':dittochoke:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dittochoke.png' . '" alt="' . ':dittochoke:' . '" />';

    $b['texts'][] = ':ditto:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ditto.png' . '" alt="' . ':ditto:' . '" />';

    $b['texts'][] = ':dm17:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dm17.png' . '" alt="' . ':dm17:' . '" />';

    $b['texts'][] = ':doalittleshake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/doalittleshake.png' . '" alt="' . ':doalittleshake:' . '" />';

    $b['texts'][] = ':doctordrunk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/doctordrunk.png' . '" alt="' . ':doctordrunk:' . '" />';

    $b['texts'][] = ':doctorfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/doctorfun.png' . '" alt="' . ':doctorfun:' . '" />';

    $b['texts'][] = ':doeshelooklikeabitch:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/doeshelooklikeabitch.png' . '" alt="' . ':doeshelooklikeabitch:' . '" />';

    $b['texts'][] = ':doge:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/doge.png' . '" alt="' . ':doge:' . '" />';

    $b['texts'][] = ':doitfor24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/doitfor24.png' . '" alt="' . ':doitfor24:' . '" />';

    $b['texts'][] = ':dolcefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dolcefun.png' . '" alt="' . ':dolcefun:' . '" />';

    $b['texts'][] = ':domefossil:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/domefossil.png' . '" alt="' . ':domefossil:' . '" />';

    $b['texts'][] = ':donottaptheglass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/donottaptheglass.png' . '" alt="' . ':donottaptheglass:' . '" />';

    $b['texts'][] = ':donotwantk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/donotwantk.png' . '" alt="' . ':donotwantk:' . '" />';

    $b['texts'][] = ':dontbeanass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dontbeanass.png' . '" alt="' . ':dontbeanass:' . '" />';

    $b['texts'][] = ':dontyouunderstand:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dontyouunderstand.png' . '" alt="' . ':dontyouunderstand:' . '" />';

    $b['texts'][] = ':doublebutts:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/doublebutts.png' . '" alt="' . ':doublebutts:' . '" />';

    $b['texts'][] = ':doublemoon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/doublemoon.png' . '" alt="' . ':doublemoon:' . '" />';

    $b['texts'][] = ':dowantk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dowantk.png' . '" alt="' . ':dowantk:' . '" />';

    $b['texts'][] = ':downvote:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/downvote.png' . '" alt="' . ':downvote:' . '" />';

    $b['texts'][] = ':drudgeconfused:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/drudgeconfused.png' . '" alt="' . ':drudgeconfused:' . '" />';

    $b['texts'][] = ':duchess:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/duchess.png' . '" alt="' . ':duchess:' . '" />';

    $b['texts'][] = ':ducklestia:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ducklestia.png' . '" alt="' . ':ducklestia:' . '" />';

    $b['texts'][] = ':dw09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dw09.png' . '" alt="' . ':dw09:' . '" />';

    $b['texts'][] = ':dw12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dw12.png' . '" alt="' . ':dw12:' . '" />';

    $b['texts'][] = ':dw22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dw22.png' . '" alt="' . ':dw22:' . '" />';

    $b['texts'][] = ':dyefooter:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dyefooter.png' . '" alt="' . ':dyefooter:' . '" />';

    $b['texts'][] = ':dyegoogle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/dyegoogle.png' . '" alt="' . ':dyegoogle:' . '" />';

    $b['texts'][] = ':ectoplasmic:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ectoplasmic.png' . '" alt="' . ':ectoplasmic:' . '" />';

    $b['texts'][] = ':ediblelove:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ediblelove.png' . '" alt="' . ':ediblelove:' . '" />';

    $b['texts'][] = ':eevndrink:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/eevndrink.png' . '" alt="' . ':eevndrink:' . '" />';

    $b['texts'][] = ':efnw:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/efnw.png' . '" alt="' . ':efnw:' . '" />';

    $b['texts'][] = ':egghead:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/egghead.png' . '" alt="' . ':egghead:' . '" />';

    $b['texts'][] = ':eip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/eip.png' . '" alt="' . ':eip:' . '" />';

    $b['texts'][] = ':emufun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/emufun.png' . '" alt="' . ':emufun:' . '" />';

    $b['texts'][] = ':emumask:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/emumask.png' . '" alt="' . ':emumask:' . '" />';

    $b['texts'][] = ':emyscoot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/emyscoot.png' . '" alt="' . ':emyscoot:' . '" />';

    $b['texts'][] = ':endlessbreadsticks:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/endlessbreadsticks.png' . '" alt="' . ':endlessbreadsticks:' . '" />';

    $b['texts'][] = ':eng:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/eng.png' . '" alt="' . ':eng:' . '" />';

    $b['texts'][] = ':entertainme:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/entertainme.png' . '" alt="' . ':entertainme:' . '" />';

    $b['texts'][] = ':eqgtno:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/eqgtno.png' . '" alt="' . ':eqgtno:' . '" />';

    $b['texts'][] = ':equestriagrills:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/equestriagrills.png' . '" alt="' . ':equestriagrills:' . '" />';

    $b['texts'][] = ':espeefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/espeefun.png' . '" alt="' . ':espeefun:' . '" />';

    $b['texts'][] = ':esplinfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/esplinfun.png' . '" alt="' . ':esplinfun:' . '" />';

    $b['texts'][] = ':evanmacave:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/evanmacave.png' . '" alt="' . ':evanmacave:' . '" />';

    $b['texts'][] = ':ewok:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ewok.png' . '" alt="' . ':ewok:' . '" />';

    $b['texts'][] = ':excelianfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/excelianfun.png' . '" alt="' . ':excelianfun:' . '" />';

    $b['texts'][] = ':existentialcrisis:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/existentialcrisis.png' . '" alt="' . ':existentialcrisis:' . '" />';

    $b['texts'][] = ':facedownassup:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/facedownassup.png' . '" alt="' . ':facedownassup:' . '" />';

    $b['texts'][] = ':faustfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/faustfun.png' . '" alt="' . ':faustfun:' . '" />';

    $b['texts'][] = ':feelzies:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/feelzies.png' . '" alt="' . ':feelzies:' . '" />';

    $b['texts'][] = ':festivebuttplug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/festivebuttplug.png' . '" alt="' . ':festivebuttplug:' . '" />';

    $b['texts'][] = ':ff30:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ff30.png' . '" alt="' . ':ff30:' . '" />';

    $b['texts'][] = ':fitfiddle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fitfiddle.png' . '" alt="' . ':fitfiddle:' . '" />';

    $b['texts'][] = ':flabrus:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flabrus.png' . '" alt="' . ':flabrus:' . '" />';

    $b['texts'][] = ':flare:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flare.png' . '" alt="' . ':flare:' . '" />';

    $b['texts'][] = ':flashyoak:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flashyoak.png' . '" alt="' . ':flashyoak:' . '" />';

    $b['texts'][] = ':fleurfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fleurfun.png' . '" alt="' . ':fleurfun:' . '" />';

    $b['texts'][] = ':flitterfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flitterfun.png' . '" alt="' . ':flitterfun:' . '" />';

    $b['texts'][] = ':floutsapple:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floutsapple.png' . '" alt="' . ':floutsapple:' . '" />';

    $b['texts'][] = ':floutstalin:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floutstalin.png' . '" alt="' . ':floutstalin:' . '" />';

    $b['texts'][] = ':floutsy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floutsy.png' . '" alt="' . ':floutsy:' . '" />';

    $b['texts'][] = ':floweycreepy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweycreepy.png' . '" alt="' . ':floweycreepy:' . '" />';

    $b['texts'][] = ':floweydead:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweydead.png' . '" alt="' . ':floweydead:' . '" />';

    $b['texts'][] = ':floweydefeated:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweydefeated.png' . '" alt="' . ':floweydefeated:' . '" />';

    $b['texts'][] = ':floweydemon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweydemon.png' . '" alt="' . ':floweydemon:' . '" />';

    $b['texts'][] = ':floweyderp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweyderp.png' . '" alt="' . ':floweyderp:' . '" />';

    $b['texts'][] = ':floweyfrown:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweyfrown.png' . '" alt="' . ':floweyfrown:' . '" />';

    $b['texts'][] = ':floweykillorbekilled:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweykillorbekilled.png' . '" alt="' . ':floweykillorbekilled:' . '" />';

    $b['texts'][] = ':floweymad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweymad.png' . '" alt="' . ':floweymad:' . '" />';

    $b['texts'][] = ':floweymaniacallaugh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweymaniacallaugh.png' . '" alt="' . ':floweymaniacallaugh:' . '" />';

    $b['texts'][] = ':floweymaniacal:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweymaniacal.png' . '" alt="' . ':floweymaniacal:' . '" />';

    $b['texts'][] = ':floweynervous:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweynervous.png' . '" alt="' . ':floweynervous:' . '" />';

    $b['texts'][] = ':flowey:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flowey.png' . '" alt="' . ':flowey:' . '" />';

    $b['texts'][] = ':floweyscared:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweyscared.png' . '" alt="' . ':floweyscared:' . '" />';

    $b['texts'][] = ':floweysmirk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweysmirk.png' . '" alt="' . ':floweysmirk:' . '" />';

    $b['texts'][] = ':floweytalk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweytalk.png' . '" alt="' . ':floweytalk:' . '" />';

    $b['texts'][] = ':floweytheking:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweytheking.png' . '" alt="' . ':floweytheking:' . '" />';

    $b['texts'][] = ':floweytheprince:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweytheprince.png' . '" alt="' . ':floweytheprince:' . '" />';

    $b['texts'][] = ':floweythequeen:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweythequeen.png' . '" alt="' . ':floweythequeen:' . '" />';

    $b['texts'][] = ':floweywink:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/floweywink.png' . '" alt="' . ':floweywink:' . '" />';

    $b['texts'][] = ':fluffybunny:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fluffybunny.png' . '" alt="' . ':fluffybunny:' . '" />';

    $b['texts'][] = ':flutterbutter:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flutterbutter.png' . '" alt="' . ':flutterbutter:' . '" />';

    $b['texts'][] = ':flutterdash69:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flutterdash69.png' . '" alt="' . ':flutterdash69:' . '" />';

    $b['texts'][] = ':flutterlenny:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flutterlenny.png' . '" alt="' . ':flutterlenny:' . '" />';

    $b['texts'][] = ':flutterplug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/flutterplug.png' . '" alt="' . ':flutterplug:' . '" />';

    $b['texts'][] = ':fluttershake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fluttershake.png' . '" alt="' . ':fluttershake:' . '" />';

    $b['texts'][] = ':fluttershypresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fluttershypresents.png' . '" alt="' . ':fluttershypresents:' . '" />';

    $b['texts'][] = ':fluttertwikiss:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fluttertwikiss.png' . '" alt="' . ':fluttertwikiss:' . '" />';

    $b['texts'][] = ':fluttryay:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fluttryay.png' . '" alt="' . ':fluttryay:' . '" />';

    $b['texts'][] = ':foe105:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/foe105.png' . '" alt="' . ':foe105:' . '" />';

    $b['texts'][] = ':foreverilonis:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/foreverilonis.png' . '" alt="' . ':foreverilonis:' . '" />';

    $b['texts'][] = ':fpmount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fpmount.png' . '" alt="' . ':fpmount:' . '" />';

    $b['texts'][] = ':fpnmount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fpnmount.png' . '" alt="' . ':fpnmount:' . '" />';

    $b['texts'][] = ':frank:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/frank.png' . '" alt="' . ':frank:' . '" />';

    $b['texts'][] = ':freakout:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/freakout.png' . '" alt="' . ':freakout:' . '" />';

    $b['texts'][] = ':friedricer:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/friedricer.png' . '" alt="' . ':friedricer:' . '" />';

    $b['texts'][] = ':frisk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/frisk.png' . '" alt="' . ':frisk:' . '" />';

    $b['texts'][] = ':fruitaberry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitaberry.png' . '" alt="' . ':fruitaberry:' . '" />';

    $b['texts'][] = ':fruitabolt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitabolt.png' . '" alt="' . ':fruitabolt:' . '" />';

    $b['texts'][] = ':fruitacora:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitacora.png' . '" alt="' . ':fruitacora:' . '" />';

    $b['texts'][] = ':fruitacord:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitacord.png' . '" alt="' . ':fruitacord:' . '" />';

    $b['texts'][] = ':fruitadowell:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitadowell.png' . '" alt="' . ':fruitadowell:' . '" />';

    $b['texts'][] = ':fruitaloo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitaloo.png' . '" alt="' . ':fruitaloo:' . '" />';

    $b['texts'][] = ':fruitamad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitamad.png' . '" alt="' . ':fruitamad:' . '" />';

    $b['texts'][] = ':fruitapants:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitapants.png' . '" alt="' . ':fruitapants:' . '" />';

    $b['texts'][] = ':fruitarity:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitarity.png' . '" alt="' . ':fruitarity:' . '" />';

    $b['texts'][] = ':fruitaspike:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitaspike.png' . '" alt="' . ':fruitaspike:' . '" />';

    $b['texts'][] = ':fruitawut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruitawut.png' . '" alt="' . ':fruitawut:' . '" />';

    $b['texts'][] = ':fruityfruity:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fruityfruity.png' . '" alt="' . ':fruityfruity:' . '" />';

    $b['texts'][] = ':fry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fry.png' . '" alt="' . ':fry:' . '" />';

    $b['texts'][] = ':fsbrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fsbrick.png' . '" alt="' . ':fsbrick:' . '" />';

    $b['texts'][] = ':ftfy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ftfy.png' . '" alt="' . ':ftfy:' . '" />';

    $b['texts'][] = ':fuckingshitthisfuckingguy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fuckingshitthisfuckingguy.png' . '" alt="' . ':fuckingshitthisfuckingguy:' . '" />';

    $b['texts'][] = ':fucktheworld:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fucktheworld.png' . '" alt="' . ':fucktheworld:' . '" />';

    $b['texts'][] = ':fuckyeahmurica:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fuckyeahmurica.png' . '" alt="' . ':fuckyeahmurica:' . '" />';

    $b['texts'][] = ':fullmoon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fullmoon.png' . '" alt="' . ':fullmoon:' . '" />';

    $b['texts'][] = ':fut13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fut13.png' . '" alt="' . ':fut13:' . '" />';

    $b['texts'][] = ':fut14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fut14.png' . '" alt="' . ':fut14:' . '" />';

    $b['texts'][] = ':fut15:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fut15.png' . '" alt="' . ':fut15:' . '" />';

    $b['texts'][] = ':fut1:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fut1.png' . '" alt="' . ':fut1:' . '" />';

    $b['texts'][] = ':fut4:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/fut4.png' . '" alt="' . ':fut4:' . '" />';

    $b['texts'][] = ':futacute:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futacute.png' . '" alt="' . ':futacute:' . '" />';

    $b['texts'][] = ':futaface:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futaface.png' . '" alt="' . ':futaface:' . '" />';

    $b['texts'][] = ':futafap:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futafap.png' . '" alt="' . ':futafap:' . '" />';

    $b['texts'][] = ':futajhelp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futajhelp.png' . '" alt="' . ':futajhelp:' . '" />';

    $b['texts'][] = ':futaplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futaplot.png' . '" alt="' . ':futaplot:' . '" />';

    $b['texts'][] = ':futapomf:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futapomf.png' . '" alt="' . ':futapomf:' . '" />';

    $b['texts'][] = ':futashyaj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futashyaj.png' . '" alt="' . ':futashyaj:' . '" />';

    $b['texts'][] = ':futashy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futashy.png' . '" alt="' . ':futashy:' . '" />';

    $b['texts'][] = ':futasy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futasy.png' . '" alt="' . ':futasy:' . '" />';

    $b['texts'][] = ':futatwishy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futatwishy.png' . '" alt="' . ':futatwishy:' . '" />';

    $b['texts'][] = ':futhelp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futhelp.png' . '" alt="' . ':futhelp:' . '" />';

    $b['texts'][] = ':futopen:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/futopen.png' . '" alt="' . ':futopen:' . '" />';

    $b['texts'][] = ':gabelincolnhats:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gabelincolnhats.png' . '" alt="' . ':gabelincolnhats:' . '" />';

    $b['texts'][] = ':gabelincoln:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gabelincoln.png' . '" alt="' . ':gabelincoln:' . '" />';

    $b['texts'][] = ':gabepony:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gabepony.png' . '" alt="' . ':gabepony:' . '" />';

    $b['texts'][] = ':gary:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gary.png' . '" alt="' . ':gary:' . '" />';

    $b['texts'][] = ':garysentry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/garysentry.png' . '" alt="' . ':garysentry:' . '" />';

    $b['texts'][] = ':gbeck:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gbeck.png' . '" alt="' . ':gbeck:' . '" />';

    $b['texts'][] = ':gdbfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gdbfun.png' . '" alt="' . ':gdbfun:' . '" />';

    $b['texts'][] = ':gembutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gembutt.png' . '" alt="' . ':gembutt:' . '" />';

    $b['texts'][] = ':genericbuilder:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/genericbuilder.png' . '" alt="' . ':genericbuilder:' . '" />';

    $b['texts'][] = ':geneticallymodifiedsalamanderwithafacejustlikegeorgeclooney:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/geneticallymodifiedsalamanderwithafacejustlikegeorgeclooney.png' . '" alt="' . ':geneticallymodifiedsalamanderwithafacejustlikegeorgeclooney:' . '" />';

    $b['texts'][] = ':geometry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/geometry.png' . '" alt="' . ':geometry:' . '" />';

    $b['texts'][] = ':ggnome:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ggnome.png' . '" alt="' . ':ggnome:' . '" />';

    $b['texts'][] = ':giofun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/giofun.png' . '" alt="' . ':giofun:' . '" />';

    $b['texts'][] = ':giomount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/giomount.png' . '" alt="' . ':giomount:' . '" />';

    $b['texts'][] = ':giraffesintheair:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/giraffesintheair.png' . '" alt="' . ':giraffesintheair:' . '" />';

    $b['texts'][] = ':giraj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/giraj.png' . '" alt="' . ':giraj:' . '" />';

    $b['texts'][] = ':girderpy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/girderpy.png' . '" alt="' . ':girderpy:' . '" />';

    $b['texts'][] = ':girlestia:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/girlestia.png' . '" alt="' . ':girlestia:' . '" />';

    $b['texts'][] = ':girluna:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/girluna.png' . '" alt="' . ':girluna:' . '" />';

    $b['texts'][] = ':girmac:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/girmac.png' . '" alt="' . ':girmac:' . '" />';

    $b['texts'][] = ':girpie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/girpie.png' . '" alt="' . ':girpie:' . '" />';

    $b['texts'][] = ':girshy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/girshy.png' . '" alt="' . ':girshy:' . '" />';

    $b['texts'][] = ':girspike:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/girspike.png' . '" alt="' . ':girspike:' . '" />';

    $b['texts'][] = ':girtwi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/girtwi.png' . '" alt="' . ':girtwi:' . '" />';

    $b['texts'][] = ':glaceon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/glaceon.png' . '" alt="' . ':glaceon:' . '" />';

    $b['texts'][] = ':glowcloud:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/glowcloud.png' . '" alt="' . ':glowcloud:' . '" />';

    $b['texts'][] = ':gnar:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gnar.png' . '" alt="' . ':gnar:' . '" />';

    $b['texts'][] = ':goddamnitmango:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/goddamnitmango.png' . '" alt="' . ':goddamnitmango:' . '" />';

    $b['texts'][] = ':gonnagetstuffdonetoday:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gonnagetstuffdonetoday.png' . '" alt="' . ':gonnagetstuffdonetoday:' . '" />';

    $b['texts'][] = ':gotmarin:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gotmarin.png' . '" alt="' . ':gotmarin:' . '" />';

    $b['texts'][] = ':gravestone:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gravestone.png' . '" alt="' . ':gravestone:' . '" />';

    $b['texts'][] = ':greatfruitaful:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/greatfruitaful.png' . '" alt="' . ':greatfruitaful:' . '" />';

    $b['texts'][] = ':greatscott:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/greatscott.png' . '" alt="' . ':greatscott:' . '" />';

    $b['texts'][] = ':greatyamsoffire:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/greatyamsoffire.png' . '" alt="' . ':greatyamsoffire:' . '" />';

    $b['texts'][] = ':grimfluff:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/grimfluff.png' . '" alt="' . ':grimfluff:' . '" />';

    $b['texts'][] = ':gummythesnail:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/gummythesnail.png' . '" alt="' . ':gummythesnail:' . '" />';

    $b['texts'][] = ':hannity:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hannity.png' . '" alt="' . ':hannity:' . '" />';

    $b['texts'][] = ':harold:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/harold.png' . '" alt="' . ':harold:' . '" />';

    $b['texts'][] = ':hatefuck:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hatefuck.png' . '" alt="' . ':hatefuck:' . '" />';

    $b['texts'][] = ':haveacookie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/haveacookie.png' . '" alt="' . ':haveacookie:' . '" />';

    $b['texts'][] = ':haveaday:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/haveaday.png' . '" alt="' . ':haveaday:' . '" />';

    $b['texts'][] = ':hcstare:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hcstare.png' . '" alt="' . ':hcstare:' . '" />';

    $b['texts'][] = ':headlesschicken:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/headlesschicken.png' . '" alt="' . ':headlesschicken:' . '" />';

    $b['texts'][] = ':heart:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/heart.png' . '" alt="' . ':heart:' . '" />';

    $b['texts'][] = ':heavybedroomeyes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/heavybedroomeyes.png' . '" alt="' . ':heavybedroomeyes:' . '" />';

    $b['texts'][] = ':heavy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/heavy.png' . '" alt="' . ':heavy:' . '" />';

    $b['texts'][] = ':hecomes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hecomes.png' . '" alt="' . ':hecomes:' . '" />';

    $b['texts'][] = ':hehehehe:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hehehehe.png' . '" alt="' . ':hehehehe:' . '" />';

    $b['texts'][] = ':helixfossil:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/helixfossil.png' . '" alt="' . ':helixfossil:' . '" />';

    $b['texts'][] = ':hellocake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hellocake.png' . '" alt="' . ':hellocake:' . '" />';

    $b['texts'][] = ':helpersalute:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/helpersalute.png' . '" alt="' . ':helpersalute:' . '" />';

    $b['texts'][] = ':heresyourbeardemotesageireallyhopeyourehappywithyourself:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/heresyourbeardemotesageireallyhopeyourehappywithyourself.png' . '" alt="' . ':heresyourbeardemotesageireallyhopeyourehappywithyourself:' . '" />';

    $b['texts'][] = ':hindsight:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hindsight.png' . '" alt="' . ':hindsight:' . '" />';

    $b['texts'][] = ':hitmonmatt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hitmonmatt.png' . '" alt="' . ':hitmonmatt:' . '" />';

    $b['texts'][] = ':hmsnipple:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hmsnipple.png' . '" alt="' . ':hmsnipple:' . '" />';

    $b['texts'][] = ':hnngg:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hnngg.png' . '" alt="' . ':hnngg:' . '" />';

    $b['texts'][] = ':HOERS:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/HOERS.png' . '" alt="' . ':HOERS:' . '" />';

    $b['texts'][] = ':hom3rbutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hom3rbutt.png' . '" alt="' . ':hom3rbutt:' . '" />';

    $b['texts'][] = ':hornbutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hornbutt.png' . '" alt="' . ':hornbutt:' . '" />';

    $b['texts'][] = ':horriblemonsterface:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/horriblemonsterface.png' . '" alt="' . ':horriblemonsterface:' . '" />';

    $b['texts'][] = ':horsecock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/horsecock.png' . '" alt="' . ':horsecock:' . '" />';

    $b['texts'][] = ':horsedick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/horsedick.png' . '" alt="' . ':horsedick:' . '" />';

    $b['texts'][] = ':horse:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/horse.png' . '" alt="' . ':horse:' . '" />';

    $b['texts'][] = ':horseporn:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/horseporn.png' . '" alt="' . ':horseporn:' . '" />';

    $b['texts'][] = ':hound:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hound.png' . '" alt="' . ':hound:' . '" />';

    $b['texts'][] = ':huehuetimeforclop:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/huehuetimeforclop.png' . '" alt="' . ':huehuetimeforclop:' . '" />';

    $b['texts'][] = ':huehuetimetoclop:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/huehuetimetoclop.png' . '" alt="' . ':huehuetimetoclop:' . '" />';

    $b['texts'][] = ':hugehorsedick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hugehorsedick.png' . '" alt="' . ':hugehorsedick:' . '" />';

    $b['texts'][] = ':humpday:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/humpday.png' . '" alt="' . ':humpday:' . '" />';

    $b['texts'][] = ':hypercock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/hypercock.png' . '" alt="' . ':hypercock:' . '" />';

    $b['texts'][] = ':i01:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i01.png' . '" alt="' . ':i01:' . '" />';

    $b['texts'][] = ':i02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i02.png' . '" alt="' . ':i02:' . '" />';

    $b['texts'][] = ':i04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i04.png' . '" alt="' . ':i04:' . '" />';

    $b['texts'][] = ':i10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i10.png' . '" alt="' . ':i10:' . '" />';

    $b['texts'][] = ':i11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i11.png' . '" alt="' . ':i11:' . '" />';

    $b['texts'][] = ':i12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i12.png' . '" alt="' . ':i12:' . '" />';

    $b['texts'][] = ':i13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i13.png' . '" alt="' . ':i13:' . '" />';

    $b['texts'][] = ':i14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i14.png' . '" alt="' . ':i14:' . '" />';

    $b['texts'][] = ':i20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i20.png' . '" alt="' . ':i20:' . '" />';

    $b['texts'][] = ':i21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i21.png' . '" alt="' . ':i21:' . '" />';

    $b['texts'][] = ':i22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i22.png' . '" alt="' . ':i22:' . '" />';

    $b['texts'][] = ':i23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i23.png' . '" alt="' . ':i23:' . '" />';

    $b['texts'][] = ':i24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i24.png' . '" alt="' . ':i24:' . '" />';

    $b['texts'][] = ':i30:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i30.png' . '" alt="' . ':i30:' . '" />';

    $b['texts'][] = ':i31:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i31.png' . '" alt="' . ':i31:' . '" />';

    $b['texts'][] = ':i32:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i32.png' . '" alt="' . ':i32:' . '" />';

    $b['texts'][] = ':i33:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i33.png' . '" alt="' . ':i33:' . '" />';

    $b['texts'][] = ':i34:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i34.png' . '" alt="' . ':i34:' . '" />';

    $b['texts'][] = ':i40:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i40.png' . '" alt="' . ':i40:' . '" />';

    $b['texts'][] = ':i41:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i41.png' . '" alt="' . ':i41:' . '" />';

    $b['texts'][] = ':i42:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/i42.png' . '" alt="' . ':i42:' . '" />';

    $b['texts'][] = ':idreamofdashie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/idreamofdashie.png' . '" alt="' . ':idreamofdashie:' . '" />';

    $b['texts'][] = ':ifuckinglovebananas:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ifuckinglovebananas.png' . '" alt="' . ':ifuckinglovebananas:' . '" />';

    $b['texts'][] = ':iheartu:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/iheartu.png' . '" alt="' . ':iheartu:' . '" />';

    $b['texts'][] = ':ilfsquid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ilfsquid.png' . '" alt="' . ':ilfsquid:' . '" />';

    $b['texts'][] = ':illbeyourgirlfriend:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/illbeyourgirlfriend.png' . '" alt="' . ':illbeyourgirlfriend:' . '" />';

    $b['texts'][] = ':ilovebananas:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ilovebananas.png' . '" alt="' . ':ilovebananas:' . '" />';

    $b['texts'][] = ':immaletyoufinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/immaletyoufinish.png' . '" alt="' . ':immaletyoufinish:' . '" />';

    $b['texts'][] = ':imsopissed:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/imsopissed.png' . '" alt="' . ':imsopissed:' . '" />';

    $b['texts'][] = ':injectiontime:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/injectiontime.png' . '" alt="' . ':injectiontime:' . '" />';

    $b['texts'][] = ':intimidate:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/intimidate.png' . '" alt="' . ':intimidate:' . '" />';

    $b['texts'][] = ':invisiblerocketboobwomen:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/invisiblerocketboobwomen.png' . '" alt="' . ':invisiblerocketboobwomen:' . '" />';

    $b['texts'][] = ':isnowgay:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/isnowgay.png' . '" alt="' . ':isnowgay:' . '" />';

    $b['texts'][] = ':itmademefeellikeapieceofshit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itmademefeellikeapieceofshit.png' . '" alt="' . ':itmademefeellikeapieceofshit:' . '" />';

    $b['texts'][] = ':itsafake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itsafake.png' . '" alt="' . ':itsafake:' . '" />';

    $b['texts'][] = ':itsareal:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itsareal.png' . '" alt="' . ':itsareal:' . '" />';

    $b['texts'][] = ':itschristmas:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itschristmas.png' . '" alt="' . ':itschristmas:' . '" />';

    $b['texts'][] = ':itsfake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itsfake.png' . '" alt="' . ':itsfake:' . '" />';

    $b['texts'][] = ':itshappening:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itshappening.png' . '" alt="' . ':itshappening:' . '" />';

    $b['texts'][] = ':itspoweredbyaforsakenchild:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itspoweredbyaforsakenchild.png' . '" alt="' . ':itspoweredbyaforsakenchild:' . '" />';

    $b['texts'][] = ':itsreal:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itsreal.png' . '" alt="' . ':itsreal:' . '" />';

    $b['texts'][] = ':itssosmooth:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/itssosmooth.png' . '" alt="' . ':itssosmooth:' . '" />';

    $b['texts'][] = ':izzy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/izzy.png' . '" alt="' . ':izzy:' . '" />';

    $b['texts'][] = ':jackiecat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jackiecat.png' . '" alt="' . ':jackiecat:' . '" />';

    $b['texts'][] = ':jake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jake.png' . '" alt="' . ':jake:' . '" />';

    $b['texts'][] = ':jax:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jax.png' . '" alt="' . ':jax:' . '" />';

    $b['texts'][] = ':jay:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jay.png' . '" alt="' . ':jay:' . '" />';

    $b['texts'][] = ':jebkerman:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jebkerman.png' . '" alt="' . ':jebkerman:' . '" />';

    $b['texts'][] = ':jeb:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jeb.png' . '" alt="' . ':jeb:' . '" />';

    $b['texts'][] = ':jeisj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jeisj.png' . '" alt="' . ':jeisj:' . '" />';

    $b['texts'][] = ':jfish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jfish.png' . '" alt="' . ':jfish:' . '" />';

    $b['texts'][] = ':jizz:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/jizz.png' . '" alt="' . ':jizz:' . '" />';

    $b['texts'][] = ':joaje:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/joaje.png' . '" alt="' . ':joaje:' . '" />';

    $b['texts'][] = ':johnfreeman:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/johnfreeman.png' . '" alt="' . ':johnfreeman:' . '" />';

    $b['texts'][] = ':joydragon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/joydragon.png' . '" alt="' . ':joydragon:' . '" />';

    $b['texts'][] = ':justdoit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/justdoit.png' . '" alt="' . ':justdoit:' . '" />';

    $b['texts'][] = ':kappa:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kappa.png' . '" alt="' . ':kappa:' . '" />';

    $b['texts'][] = ':karmabanana:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/karmabanana.png' . '" alt="' . ':karmabanana:' . '" />';

    $b['texts'][] = ':karmahoers:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/karmahoers.png' . '" alt="' . ':karmahoers:' . '" />';

    $b['texts'][] = ':kat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kat.png' . '" alt="' . ':kat:' . '" />';

    $b['texts'][] = ':kazoo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kazoo.png' . '" alt="' . ':kazoo:' . '" />';

    $b['texts'][] = ':kballoon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kballoon.png' . '" alt="' . ':kballoon:' . '" />';

    $b['texts'][] = ':kdalek1:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kdalek1.png' . '" alt="' . ':kdalek1:' . '" />';

    $b['texts'][] = ':kdalek2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kdalek2.png' . '" alt="' . ':kdalek2:' . '" />';

    $b['texts'][] = ':kdancefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kdancefun.png' . '" alt="' . ':kdancefun:' . '" />';

    $b['texts'][] = ':killerrabbit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/killerrabbit.png' . '" alt="' . ':killerrabbit:' . '" />';

    $b['texts'][] = ':killme:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/killme.png' . '" alt="' . ':killme:' . '" />';

    $b['texts'][] = ':kissit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kissit.png' . '" alt="' . ':kissit:' . '" />';

    $b['texts'][] = ':kissmyass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kissmyass.png' . '" alt="' . ':kissmyass:' . '" />';

    $b['texts'][] = ':kittiebelle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kittiebelle.png' . '" alt="' . ':kittiebelle:' . '" />';

    $b['texts'][] = ':kitty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kitty.png' . '" alt="' . ':kitty:' . '" />';

    $b['texts'][] = ':konahappy2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/konahappy2.png' . '" alt="' . ':konahappy2:' . '" />';

    $b['texts'][] = ':konahappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/konahappy.png' . '" alt="' . ':konahappy:' . '" />';

    $b['texts'][] = ':konapenis:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/konapenis.png' . '" alt="' . ':konapenis:' . '" />';

    $b['texts'][] = ':kontanlovesyou:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kontanlovesyou.png' . '" alt="' . ':kontanlovesyou:' . '" />';

    $b['texts'][] = ':kontan:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kontan.png' . '" alt="' . ':kontan:' . '" />';

    $b['texts'][] = ':koolaid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/koolaid.png' . '" alt="' . ':koolaid:' . '" />';

    $b['texts'][] = ':kwuala:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/kwuala.png' . '" alt="' . ':kwuala:' . '" />';

    $b['texts'][] = ':lambdalaugh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lambdalaugh.png' . '" alt="' . ':lambdalaugh:' . '" />';

    $b['texts'][] = ':larsonvodka:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/larsonvodka.png' . '" alt="' . ':larsonvodka:' . '" />';

    $b['texts'][] = ':laughingcock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/laughingcock.png' . '" alt="' . ':laughingcock:' . '" />';

    $b['texts'][] = ':laughingstock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/laughingstock.png' . '" alt="' . ':laughingstock:' . '" />';

    $b['texts'][] = ':lavender:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lavender.png' . '" alt="' . ':lavender:' . '" />';

    $b['texts'][] = ':lavxempyotp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lavxempyotp.png' . '" alt="' . ':lavxempyotp:' . '" />';

    $b['texts'][] = ':lawl:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lawl.png' . '" alt="' . ':lawl:' . '" />';

    $b['texts'][] = ':lazybear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lazybear.png' . '" alt="' . ':lazybear:' . '" />';

    $b['texts'][] = ':lcelordv:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lcelordv.png' . '" alt="' . ':lcelordv:' . '" />';

    $b['texts'][] = ':LeMeme:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/LeMeme.png' . '" alt="' . ':LeMeme:' . '" />';

    $b['texts'][] = ':lemonfire:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lemonfire.png' . '" alt="' . ':lemonfire:' . '" />';

    $b['texts'][] = ':lemonkeyface:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lemonkeyface.png' . '" alt="' . ':lemonkeyface:' . '" />';

    $b['texts'][] = ':lewd:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lewd.png' . '" alt="' . ':lewd:' . '" />';

    $b['texts'][] = ':lickusclean:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lickusclean.png' . '" alt="' . ':lickusclean:' . '" />';

    $b['texts'][] = ':limbaugh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/limbaugh.png' . '" alt="' . ':limbaugh:' . '" />';

    $b['texts'][] = ':lisa:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lisa.png' . '" alt="' . ':lisa:' . '" />';

    $b['texts'][] = ':literallybrohoof:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/literallybrohoof.png' . '" alt="' . ':literallybrohoof:' . '" />';

    $b['texts'][] = ':lizarddash:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lizarddash.png' . '" alt="' . ':lizarddash:' . '" />';

    $b['texts'][] = ':lizardjack:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lizardjack.png' . '" alt="' . ':lizardjack:' . '" />';

    $b['texts'][] = ':lizardpie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lizardpie.png' . '" alt="' . ':lizardpie:' . '" />';

    $b['texts'][] = ':lizardshy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lizardshy.png' . '" alt="' . ':lizardshy:' . '" />';

    $b['texts'][] = ':lizardtavi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lizardtavi.png' . '" alt="' . ':lizardtavi:' . '" />';

    $b['texts'][] = ':lodsofemone:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lodsofemone.png' . '" alt="' . ':lodsofemone:' . '" />';

    $b['texts'][] = ':loligagging:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/loligagging.png' . '" alt="' . ':loligagging:' . '" />';

    $b['texts'][] = ':longlines:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/longlines.png' . '" alt="' . ':longlines:' . '" />';

    $b['texts'][] = ':lookatitgo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lookatitgo.png' . '" alt="' . ':lookatitgo:' . '" />';

    $b['texts'][] = ':lopezislife:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lopezislife.png' . '" alt="' . ':lopezislife:' . '" />';

    $b['texts'][] = ':lovebutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lovebutt.png' . '" alt="' . ':lovebutt:' . '" />';

    $b['texts'][] = ':lpfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lpfun.png' . '" alt="' . ':lpfun:' . '" />';

    $b['texts'][] = ':lrcelordv:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lrcelordv.png' . '" alt="' . ':lrcelordv:' . '" />';

    $b['texts'][] = ':ls_alert:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ls_alert.png' . '" alt="' . ':ls_alert:' . '" />';

    $b['texts'][] = ':luissuarezgoalagainstespanyolon18122016fantasticassistbyleomessi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/luissuarezgoalagainstespanyolon18122016fantasticassistbyleomessi.png' . '" alt="' . ':luissuarezgoalagainstespanyolon18122016fantasticassistbyleomessi:' . '" />';

    $b['texts'][] = ':lulu:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lulu.png' . '" alt="' . ':lulu:' . '" />';

    $b['texts'][] = ':lunacock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lunacock.png' . '" alt="' . ':lunacock:' . '" />';

    $b['texts'][] = ':lunafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lunafun.png' . '" alt="' . ':lunafun:' . '" />';

    $b['texts'][] = ':lunamine:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lunamine.png' . '" alt="' . ':lunamine:' . '" />';

    $b['texts'][] = ':lunawantk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lunawantk.png' . '" alt="' . ':lunawantk:' . '" />';

    $b['texts'][] = ':lunayylmao:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lunayylmao.png' . '" alt="' . ':lunayylmao:' . '" />';

    $b['texts'][] = ':lyrabutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lyrabutt.png' . '" alt="' . ':lyrabutt:' . '" />';

    $b['texts'][] = ':lyracock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lyracock.png' . '" alt="' . ':lyracock:' . '" />';

    $b['texts'][] = ':lyrafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lyrafun.png' . '" alt="' . ':lyrafun:' . '" />';

    $b['texts'][] = ':lyrapenisdoubt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lyrapenisdoubt.png' . '" alt="' . ':lyrapenisdoubt:' . '" />';

    $b['texts'][] = ':lyrapresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lyrapresents.png' . '" alt="' . ':lyrapresents:' . '" />';

    $b['texts'][] = ':lyrish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/lyrish.png' . '" alt="' . ':lyrish:' . '" />';

    $b['texts'][] = ':MAAAAAAAAAA:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/MAAAAAAAAAA.png' . '" alt="' . ':MAAAAAAAAAA:' . '" />';

    $b['texts'][] = ':magictrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/magictrick.png' . '" alt="' . ':magictrick:' . '" />';

    $b['texts'][] = ':mahnigga:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mahnigga.png' . '" alt="' . ':mahnigga:' . '" />';

    $b['texts'][] = ':maidmolly:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/maidmolly.png' . '" alt="' . ':maidmolly:' . '" />';

    $b['texts'][] = ':manliestherowithnotesticles:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/manliestherowithnotesticles.png' . '" alt="' . ':manliestherowithnotesticles:' . '" />';

    $b['texts'][] = ':mantispony:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mantispony.png' . '" alt="' . ':mantispony:' . '" />';

    $b['texts'][] = ':maudfinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/maudfinish.png' . '" alt="' . ':maudfinish:' . '" />';

    $b['texts'][] = ':maximumoverbite:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/maximumoverbite.png' . '" alt="' . ':maximumoverbite:' . '" />';

    $b['texts'][] = ':mayo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mayo.png' . '" alt="' . ':mayo:' . '" />';

    $b['texts'][] = ':mcguirk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mcguirk.png' . '" alt="' . ':mcguirk:' . '" />';

    $b['texts'][] = ':meatballs:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/meatballs.png' . '" alt="' . ':meatballs:' . '" />';

    $b['texts'][] = ':mechahitler:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mechahitler.png' . '" alt="' . ':mechahitler:' . '" />';

    $b['texts'][] = ':medic:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/medic.png' . '" alt="' . ':medic:' . '" />';

    $b['texts'][] = ':megan:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/megan.png' . '" alt="' . ':megan:' . '" />';

    $b['texts'][] = ':mettatonex:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mettatonex.png' . '" alt="' . ':mettatonex:' . '" />';

    $b['texts'][] = ':mettaton:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mettaton.png' . '" alt="' . ':mettaton:' . '" />';

    $b['texts'][] = ':mibglasses:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mibglasses.png' . '" alt="' . ':mibglasses:' . '" />';

    $b['texts'][] = ':miggyb2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/miggyb2.png' . '" alt="' . ':miggyb2:' . '" />';

    $b['texts'][] = ':milkydance:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/milkydance.png' . '" alt="' . ':milkydance:' . '" />';

    $b['texts'][] = ':milkymic:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/milkymic.png' . '" alt="' . ':milkymic:' . '" />';

    $b['texts'][] = ':minakowhy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/minakowhy.png' . '" alt="' . ':minakowhy:' . '" />';

    $b['texts'][] = ':minty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/minty.png' . '" alt="' . ':minty:' . '" />';

    $b['texts'][] = ':minus20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/minus20.png' . '" alt="' . ':minus20:' . '" />';

    $b['texts'][] = ':minutesofthis:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/minutesofthis.png' . '" alt="' . ':minutesofthis:' . '" />';

    $b['texts'][] = ':missingno:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/missingno.png' . '" alt="' . ':missingno:' . '" />';

    $b['texts'][] = ':mistletoe:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mistletoe.png' . '" alt="' . ':mistletoe:' . '" />';

    $b['texts'][] = ':mlsa1:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsa1.png' . '" alt="' . ':mlsa1:' . '" />';

    $b['texts'][] = ':mlsa2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsa2.png' . '" alt="' . ':mlsa2:' . '" />';

    $b['texts'][] = ':mlsa3:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsa3.png' . '" alt="' . ':mlsa3:' . '" />';

    $b['texts'][] = ':mlsa4:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsa4.png' . '" alt="' . ':mlsa4:' . '" />';

    $b['texts'][] = ':mlsb3:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsb3.png' . '" alt="' . ':mlsb3:' . '" />';

    $b['texts'][] = ':mlsb4:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsb4.png' . '" alt="' . ':mlsb4:' . '" />';

    $b['texts'][] = ':mlsd1:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsd1.png' . '" alt="' . ':mlsd1:' . '" />';

    $b['texts'][] = ':mlsd2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsd2.png' . '" alt="' . ':mlsd2:' . '" />';

    $b['texts'][] = ':mlsd3:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsd3.png' . '" alt="' . ':mlsd3:' . '" />';

    $b['texts'][] = ':mlse3:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlse3.png' . '" alt="' . ':mlse3:' . '" />';

    $b['texts'][] = ':mlsf2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsf2.png' . '" alt="' . ':mlsf2:' . '" />';

    $b['texts'][] = ':mlsf4:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsf4.png' . '" alt="' . ':mlsf4:' . '" />';

    $b['texts'][] = ':mlsg1:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsg1.png' . '" alt="' . ':mlsg1:' . '" />';

    $b['texts'][] = ':mlsg2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mlsg2.png' . '" alt="' . ':mlsg2:' . '" />';

    $b['texts'][] = ':moist:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/moist.png' . '" alt="' . ':moist:' . '" />';

    $b['texts'][] = ':momss:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/momss.png' . '" alt="' . ':momss:' . '" />';

    $b['texts'][] = ':mongoosewithit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mongoosewithit.png' . '" alt="' . ':mongoosewithit:' . '" />';

    $b['texts'][] = ':mongusta:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mongusta.png' . '" alt="' . ':mongusta:' . '" />';

    $b['texts'][] = ':mooncock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mooncock.png' . '" alt="' . ':mooncock:' . '" />';

    $b['texts'][] = ':mooncreampie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mooncreampie.png' . '" alt="' . ':mooncreampie:' . '" />';

    $b['texts'][] = ':moongusta:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/moongusta.png' . '" alt="' . ':moongusta:' . '" />';

    $b['texts'][] = ':more:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/more.png' . '" alt="' . ':more:' . '" />';

    $b['texts'][] = ':moxshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/moxshrug.png' . '" alt="' . ':moxshrug:' . '" />';

    $b['texts'][] = ':mrbones:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mrbones.png' . '" alt="' . ':mrbones:' . '" />';

    $b['texts'][] = ':muffet:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/muffet.png' . '" alt="' . ':muffet:' . '" />';

    $b['texts'][] = ':mwno:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mwno.png' . '" alt="' . ':mwno:' . '" />';

    $b['texts'][] = ':myaah:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/myaah.png' . '" alt="' . ':myaah:' . '" />';

    $b['texts'][] = ':myeyes2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/myeyes2.png' . '" alt="' . ':myeyes2:' . '" />';

    $b['texts'][] = ':mylife:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mylife.png' . '" alt="' . ':mylife:' . '" />';

    $b['texts'][] = ':myrandall:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/myrandall.png' . '" alt="' . ':myrandall:' . '" />';

    $b['texts'][] = ':mystuff:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mystuff.png' . '" alt="' . ':mystuff:' . '" />';

    $b['texts'][] = ':mythbusted:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/mythbusted.png' . '" alt="' . ':mythbusted:' . '" />';

    $b['texts'][] = ':nataliapoklonskaya:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nataliapoklonskaya.png' . '" alt="' . ':nataliapoklonskaya:' . '" />';

    $b['texts'][] = ':nazichainsawflamethrower:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nazichainsawflamethrower.png' . '" alt="' . ':nazichainsawflamethrower:' . '" />';

    $b['texts'][] = ':necro:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/necro.png' . '" alt="' . ':necro:' . '" />';

    $b['texts'][] = ':nekocool:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nekocool.png' . '" alt="' . ':nekocool:' . '" />';

    $b['texts'][] = ':nerdychriscandyvan:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nerdychriscandyvan.png' . '" alt="' . ':nerdychriscandyvan:' . '" />';

    $b['texts'][] = ':nessie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nessie.png' . '" alt="' . ':nessie:' . '" />';

    $b['texts'][] = ':nightcest:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nightcest.png' . '" alt="' . ':nightcest:' . '" />';

    $b['texts'][] = ':nighthairity:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nighthairity.png' . '" alt="' . ':nighthairity:' . '" />';

    $b['texts'][] = ':NissanVersa:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/NissanVersa.png' . '" alt="' . ':NissanVersa:' . '" />';

    $b['texts'][] = ':nmanal:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nmanal.png' . '" alt="' . ':nmanal:' . '" />';

    $b['texts'][] = ':nmcock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nmcock.png' . '" alt="' . ':nmcock:' . '" />';

    $b['texts'][] = ':nmmbent:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nmmbent.png' . '" alt="' . ':nmmbent:' . '" />';

    $b['texts'][] = ':nmmbj:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nmmbj.png' . '" alt="' . ':nmmbj:' . '" />';

    $b['texts'][] = ':nmmpresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nmmpresents.png' . '" alt="' . ':nmmpresents:' . '" />';

    $b['texts'][] = ':noidea:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/noidea.png' . '" alt="' . ':noidea:' . '" />';

    $b['texts'][] = ':nomeansno:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nomeansno.png' . '" alt="' . ':nomeansno:' . '" />';

    $b['texts'][] = ':noods:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/noods.png' . '" alt="' . ':noods:' . '" />';

    $b['texts'][] = ':noponyhere:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/noponyhere.png' . '" alt="' . ':noponyhere:' . '" />';

    $b['texts'][] = ':nostrils:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/nostrils.png' . '" alt="' . ':nostrils:' . '" />';

    $b['texts'][] = ':notatallboy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/notatallboy.png' . '" alt="' . ':notatallboy:' . '" />';

    $b['texts'][] = ':notthebees:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/notthebees.png' . '" alt="' . ':notthebees:' . '" />';

    $b['texts'][] = ':notupron:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/notupron.png' . '" alt="' . ':notupron:' . '" />';

    $b['texts'][] = ':octaviagasm:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/octaviagasm.png' . '" alt="' . ':octaviagasm:' . '" />';

    $b['texts'][] = ':octodash:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/octodash.png' . '" alt="' . ':octodash:' . '" />';

    $b['texts'][] = ':ohgosh:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ohgosh.png' . '" alt="' . ':ohgosh:' . '" />';

    $b['texts'][] = ':ohhited:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ohhited.png' . '" alt="' . ':ohhited:' . '" />';

    $b['texts'][] = ':ohmy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ohmy.png' . '" alt="' . ':ohmy:' . '" />';

    $b['texts'][] = ':ohnoes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ohnoes.png' . '" alt="' . ':ohnoes:' . '" />';

    $b['texts'][] = ':ohshitbby:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ohshitbby.png' . '" alt="' . ':ohshitbby:' . '" />';

    $b['texts'][] = ':oldsmash:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/oldsmash.png' . '" alt="' . ':oldsmash:' . '" />';

    $b['texts'][] = ':omelet:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/omelet.png' . '" alt="' . ':omelet:' . '" />';

    $b['texts'][] = ':onedoesnotsimply:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/onedoesnotsimply.png' . '" alt="' . ':onedoesnotsimply:' . '" />';

    $b['texts'][] = ':ootachi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ootachi.png' . '" alt="' . ':ootachi:' . '" />';

    $b['texts'][] = ':oot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/oot.png' . '" alt="' . ':oot:' . '" />';

    $b['texts'][] = ':orschemote:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/orschemote.png' . '" alt="' . ':orschemote:' . '" />';

    $b['texts'][] = ':orschfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/orschfun.png' . '" alt="' . ':orschfun:' . '" />';

    $b['texts'][] = ':orschswaifu:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/orschswaifu.png' . '" alt="' . ':orschswaifu:' . '" />';

    $b['texts'][] = ':orshity:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/orshity.png' . '" alt="' . ':orshity:' . '" />';

    $b['texts'][] = ':otter:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/otter.png' . '" alt="' . ':otter:' . '" />';

    $b['texts'][] = ':palin:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/palin.png' . '" alt="' . ':palin:' . '" />';

    $b['texts'][] = ':pan10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pan10.png' . '" alt="' . ':pan10:' . '" />';

    $b['texts'][] = ':pancalcos:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pancalcos.png' . '" alt="' . ':pancalcos:' . '" />';

    $b['texts'][] = ':pantschwitz:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pantschwitz.png' . '" alt="' . ':pantschwitz:' . '" />';

    $b['texts'][] = ':panwaffbattle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/panwaffbattle.png' . '" alt="' . ':panwaffbattle:' . '" />';

    $b['texts'][] = ':paperhorse:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/paperhorse.png' . '" alt="' . ':paperhorse:' . '" />';

    $b['texts'][] = ':papyrusderp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/papyrusderp.png' . '" alt="' . ':papyrusderp:' . '" />';

    $b['texts'][] = ':papyrushappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/papyrushappy.png' . '" alt="' . ':papyrushappy:' . '" />';

    $b['texts'][] = ':papyrusmad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/papyrusmad.png' . '" alt="' . ':papyrusmad:' . '" />';

    $b['texts'][] = ':papyrusnervous:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/papyrusnervous.png' . '" alt="' . ':papyrusnervous:' . '" />';

    $b['texts'][] = ':papyrusoutraged:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/papyrusoutraged.png' . '" alt="' . ':papyrusoutraged:' . '" />';

    $b['texts'][] = ':papyrus:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/papyrus.png' . '" alt="' . ':papyrus:' . '" />';

    $b['texts'][] = ':papyrussad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/papyrussad.png' . '" alt="' . ':papyrussad:' . '" />';

    $b['texts'][] = ':papyrusshifty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/papyrusshifty.png' . '" alt="' . ':papyrusshifty:' . '" />';

    $b['texts'][] = ':peacheyes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/peacheyes.png' . '" alt="' . ':peacheyes:' . '" />';

    $b['texts'][] = ':pear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pear.png' . '" alt="' . ':pear:' . '" />';

    $b['texts'][] = ':peelwithit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/peelwithit.png' . '" alt="' . ':peelwithit:' . '" />';

    $b['texts'][] = ':pekoe:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pekoe.png' . '" alt="' . ':pekoe:' . '" />';

    $b['texts'][] = ':pepperonipizza:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pepperonipizza.png' . '" alt="' . ':pepperonipizza:' . '" />';

    $b['texts'][] = ':perry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/perry.png' . '" alt="' . ':perry:' . '" />';

    $b['texts'][] = ':petrafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/petrafun.png' . '" alt="' . ':petrafun:' . '" />';

    $b['texts'][] = ':pfreeman:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pfreeman.png' . '" alt="' . ':pfreeman:' . '" />';

    $b['texts'][] = ':pfudon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pfudon.png' . '" alt="' . ':pfudon:' . '" />';

    $b['texts'][] = ':pfudor:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pfudor.png' . '" alt="' . ':pfudor:' . '" />';

    $b['texts'][] = ':pgaben:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pgaben.png' . '" alt="' . ':pgaben:' . '" />';

    $b['texts'][] = ':phil:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/phil.png' . '" alt="' . ':phil:' . '" />';

    $b['texts'][] = ':piggybee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggybee.png' . '" alt="' . ':piggybee:' . '" />';

    $b['texts'][] = ':piggybelle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggybelle.png' . '" alt="' . ':piggybelle:' . '" />';

    $b['texts'][] = ':piggybloom:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggybloom.png' . '" alt="' . ':piggybloom:' . '" />';

    $b['texts'][] = ':piggybon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggybon.png' . '" alt="' . ':piggybon:' . '" />';

    $b['texts'][] = ':piggybug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggybug.png' . '" alt="' . ':piggybug:' . '" />';

    $b['texts'][] = ':piggyburn:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyburn.png' . '" alt="' . ':piggyburn:' . '" />';

    $b['texts'][] = ':piggycadance:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggycadance.png' . '" alt="' . ':piggycadance:' . '" />';

    $b['texts'][] = ':piggychaser:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggychaser.png' . '" alt="' . ':piggychaser:' . '" />';

    $b['texts'][] = ':piggydash:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggydash.png' . '" alt="' . ':piggydash:' . '" />';

    $b['texts'][] = ':piggyderpy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyderpy.png' . '" alt="' . ':piggyderpy:' . '" />';

    $b['texts'][] = ':piggydoctor:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggydoctor.png' . '" alt="' . ':piggydoctor:' . '" />';

    $b['texts'][] = ':piggydo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggydo.png' . '" alt="' . ':piggydo:' . '" />';

    $b['texts'][] = ':piggyfire:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyfire.png' . '" alt="' . ':piggyfire:' . '" />';

    $b['texts'][] = ':piggyflitter:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyflitter.png' . '" alt="' . ':piggyflitter:' . '" />';

    $b['texts'][] = ':piggygate:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggygate.png' . '" alt="' . ':piggygate:' . '" />';

    $b['texts'][] = ':piggyheart:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyheart.png' . '" alt="' . ':piggyheart:' . '" />';

    $b['texts'][] = ':piggyjack:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyjack.png' . '" alt="' . ':piggyjack:' . '" />';

    $b['texts'][] = ':piggykarma:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggykarma.png' . '" alt="' . ':piggykarma:' . '" />';

    $b['texts'][] = ':piggylane:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggylane.png' . '" alt="' . ':piggylane:' . '" />';

    $b['texts'][] = ':piggylee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggylee.png' . '" alt="' . ':piggylee:' . '" />';

    $b['texts'][] = ':piggyloo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyloo.png' . '" alt="' . ':piggyloo:' . '" />';

    $b['texts'][] = ':piggyluck:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyluck.png' . '" alt="' . ':piggyluck:' . '" />';

    $b['texts'][] = ':piggyluna:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyluna.png' . '" alt="' . ':piggyluna:' . '" />';

    $b['texts'][] = ':piggylyra:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggylyra.png' . '" alt="' . ':piggylyra:' . '" />';

    $b['texts'][] = ':piggymac:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggymac.png' . '" alt="' . ':piggymac:' . '" />';

    $b['texts'][] = ':piggymaud:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggymaud.png' . '" alt="' . ':piggymaud:' . '" />';

    $b['texts'][] = ':piggymoon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggymoon.png' . '" alt="' . ':piggymoon:' . '" />';

    $b['texts'][] = ':piggypie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggypie.png' . '" alt="' . ':piggypie:' . '" />';

    $b['texts'][] = ':piggyscratch:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyscratch.png' . '" alt="' . ':piggyscratch:' . '" />';

    $b['texts'][] = ':piggyshimmer:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyshimmer.png' . '" alt="' . ':piggyshimmer:' . '" />';

    $b['texts'][] = ':piggyshy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyshy.png' . '" alt="' . ':piggyshy:' . '" />';

    $b['texts'][] = ':piggysoarin:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggysoarin.png' . '" alt="' . ':piggysoarin:' . '" />';

    $b['texts'][] = ':piggysparkle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggysparkle.png' . '" alt="' . ':piggysparkle:' . '" />';

    $b['texts'][] = ':piggytavi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggytavi.png' . '" alt="' . ':piggytavi:' . '" />';

    $b['texts'][] = ':piggytia:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggytia.png' . '" alt="' . ':piggytia:' . '" />';

    $b['texts'][] = ':piggytrixie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggytrixie.png' . '" alt="' . ':piggytrixie:' . '" />';

    $b['texts'][] = ':piggytwist:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggytwist.png' . '" alt="' . ':piggytwist:' . '" />';

    $b['texts'][] = ':piggyty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyty.png' . '" alt="' . ':piggyty:' . '" />';

    $b['texts'][] = ':piggyzecora:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piggyzecora.png' . '" alt="' . ':piggyzecora:' . '" />';

    $b['texts'][] = ':piledriver:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/piledriver.png' . '" alt="' . ':piledriver:' . '" />';

    $b['texts'][] = ':pillowtalk:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pillowtalk.png' . '" alt="' . ':pillowtalk:' . '" />';

    $b['texts'][] = ':pineapple:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pineapple.png' . '" alt="' . ':pineapple:' . '" />';

    $b['texts'][] = ':pinkabomination:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkabomination.png' . '" alt="' . ':pinkabomination:' . '" />';

    $b['texts'][] = ':pinkfluffyunicorndancingonrainbows:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkfluffyunicorndancingonrainbows.png' . '" alt="' . ':pinkfluffyunicorndancingonrainbows:' . '" />';

    $b['texts'][] = ':pinkfluffyunicornsdancingonrainbows:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkfluffyunicornsdancingonrainbows.png' . '" alt="' . ':pinkfluffyunicornsdancingonrainbows:' . '" />';

    $b['texts'][] = ':pinkiefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkiefun.png' . '" alt="' . ':pinkiefun:' . '" />';

    $b['texts'][] = ':pinkieketchum:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkieketchum.png' . '" alt="' . ':pinkieketchum:' . '" />';

    $b['texts'][] = ':pinkiepanties:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkiepanties.png' . '" alt="' . ':pinkiepanties:' . '" />';

    $b['texts'][] = ':pinkiepop:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkiepop.png' . '" alt="' . ':pinkiepop:' . '" />';

    $b['texts'][] = ':pinkiepresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkiepresents.png' . '" alt="' . ':pinkiepresents:' . '" />';

    $b['texts'][] = ':pinkieshake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinkieshake.png' . '" alt="' . ':pinkieshake:' . '" />';

    $b['texts'][] = ':pinksplosion:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pinksplosion.png' . '" alt="' . ':pinksplosion:' . '" />';

    $b['texts'][] = ':pixelfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pixelfun.png' . '" alt="' . ':pixelfun:' . '" />';

    $b['texts'][] = ':pix:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pix.png' . '" alt="' . ':pix:' . '" />';

    $b['texts'][] = ':pl02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pl02.png' . '" alt="' . ':pl02:' . '" />';

    $b['texts'][] = ':pl03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pl03.png' . '" alt="' . ':pl03:' . '" />';

    $b['texts'][] = ':plausible:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/plausible.png' . '" alt="' . ':plausible:' . '" />';

    $b['texts'][] = ':ploot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ploot.png' . '" alt="' . ':ploot:' . '" />';

    $b['texts'][] = ':plotdance:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/plotdance.png' . '" alt="' . ':plotdance:' . '" />';

    $b['texts'][] = ':plotpair:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/plotpair.png' . '" alt="' . ':plotpair:' . '" />';

    $b['texts'][] = ':plotpirouette:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/plotpirouette.png' . '" alt="' . ':plotpirouette:' . '" />';

    $b['texts'][] = ':plotspin:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/plotspin.png' . '" alt="' . ':plotspin:' . '" />';

    $b['texts'][] = ':plottwirl:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/plottwirl.png' . '" alt="' . ':plottwirl:' . '" />';

    $b['texts'][] = ':plotwhirl:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/plotwhirl.png' . '" alt="' . ':plotwhirl:' . '" />';

    $b['texts'][] = ':pm:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pm.png' . '" alt="' . ':pm:' . '" />';

    $b['texts'][] = ':pone:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pone.png' . '" alt="' . ':pone:' . '" />';

    $b['texts'][] = ':ponies:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ponies.png' . '" alt="' . ':ponies:' . '" />';

    $b['texts'][] = ':ponyjpeg:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ponyjpeg.png' . '" alt="' . ':ponyjpeg:' . '" />';

    $b['texts'][] = ':ponykoreaisbestkorea:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ponykoreaisbestkorea.png' . '" alt="' . ':ponykoreaisbestkorea:' . '" />';

    $b['texts'][] = ':ponymead:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ponymead.png' . '" alt="' . ':ponymead:' . '" />';

    $b['texts'][] = ':pony:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pony.png' . '" alt="' . ':pony:' . '" />';

    $b['texts'][] = ':potatojob:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/potatojob.png' . '" alt="' . ':potatojob:' . '" />';

    $b['texts'][] = ':ppbrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ppbrick.png' . '" alt="' . ':ppbrick:' . '" />';

    $b['texts'][] = ':ppdude:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ppdude.png' . '" alt="' . ':ppdude:' . '" />';

    $b['texts'][] = ':ppfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ppfun.png' . '" alt="' . ':ppfun:' . '" />';

    $b['texts'][] = ':ppready:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ppready.png' . '" alt="' . ':ppready:' . '" />';

    $b['texts'][] = ':prepareyouranus:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/prepareyouranus.png' . '" alt="' . ':prepareyouranus:' . '" />';

    $b['texts'][] = ':presentingcolgate:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/presentingcolgate.png' . '" alt="' . ':presentingcolgate:' . '" />';

    $b['texts'][] = ':princesshug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/princesshug.png' . '" alt="' . ':princesshug:' . '" />';

    $b['texts'][] = ':proftwi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/proftwi.png' . '" alt="' . ':proftwi:' . '" />';

    $b['texts'][] = ':proletariat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/proletariat.png' . '" alt="' . ':proletariat:' . '" />';

    $b['texts'][] = ':purplefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/purplefun.png' . '" alt="' . ':purplefun:' . '" />';

    $b['texts'][] = ':pussylantern:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pussylantern.png' . '" alt="' . ':pussylantern:' . '" />';

    $b['texts'][] = ':puzzle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/puzzle.png' . '" alt="' . ':puzzle:' . '" />';

    $b['texts'][] = ':pwobjection:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pwobjection.png' . '" alt="' . ':pwobjection:' . '" />';

    $b['texts'][] = ':pyro:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/pyro.png' . '" alt="' . ':pyro:' . '" />';

    $b['texts'][] = ':q0:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/q0.png' . '" alt="' . ':q0:' . '" />';

    $b['texts'][] = ':qcmeme:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/qcmeme.png' . '" alt="' . ':qcmeme:' . '" />';

    $b['texts'][] = ':qtmark:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/qtmark.png' . '" alt="' . ':qtmark:' . '" />';

    $b['texts'][] = ':quails:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/quails.png' . '" alt="' . ':quails:' . '" />';

    $b['texts'][] = ':queenass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/queenass.png' . '" alt="' . ':queenass:' . '" />';

    $b['texts'][] = ':queenbutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/queenbutt.png' . '" alt="' . ':queenbutt:' . '" />';

    $b['texts'][] = ':queendrip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/queendrip.png' . '" alt="' . ':queendrip:' . '" />';

    $b['texts'][] = ':queennurse:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/queennurse.png' . '" alt="' . ':queennurse:' . '" />';

    $b['texts'][] = ':queenopenwide:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/queenopenwide.png' . '" alt="' . ':queenopenwide:' . '" />';

    $b['texts'][] = ':queenpresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/queenpresents.png' . '" alt="' . ':queenpresents:' . '" />';

    $b['texts'][] = ':quillmaster:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/quillmaster.png' . '" alt="' . ':quillmaster:' . '" />';

    $b['texts'][] = ':r60fluts:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/r60fluts.png' . '" alt="' . ':r60fluts:' . '" />';

    $b['texts'][] = ':r60jig:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/r60jig.png' . '" alt="' . ':r60jig:' . '" />';

    $b['texts'][] = ':r60pose:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/r60pose.png' . '" alt="' . ':r60pose:' . '" />';

    $b['texts'][] = ':rainbowmaid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rainbowmaid.png' . '" alt="' . ':rainbowmaid:' . '" />';

    $b['texts'][] = ':rainbowponysemen:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rainbowponysemen.png' . '" alt="' . ':rainbowponysemen:' . '" />';

    $b['texts'][] = ':rainbowshake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rainbowshake.png' . '" alt="' . ':rainbowshake:' . '" />';

    $b['texts'][] = ':rainmpodasha:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rainmpodasha.png' . '" alt="' . ':rainmpodasha:' . '" />';

    $b['texts'][] = ':rajplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rajplot.png' . '" alt="' . ':rajplot:' . '" />';

    $b['texts'][] = ':rarchersaur:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rarchersaur.png' . '" alt="' . ':rarchersaur:' . '" />';

    $b['texts'][] = ':rarfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rarfun.png' . '" alt="' . ':rarfun:' . '" />';

    $b['texts'][] = ':raricock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/raricock.png' . '" alt="' . ':raricock:' . '" />';

    $b['texts'][] = ':rarieyes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rarieyes.png' . '" alt="' . ':rarieyes:' . '" />';

    $b['texts'][] = ':rarifinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rarifinish.png' . '" alt="' . ':rarifinish:' . '" />';

    $b['texts'][] = ':rarishibe:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rarishibe.png' . '" alt="' . ':rarishibe:' . '" />';

    $b['texts'][] = ':rarisuck:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rarisuck.png' . '" alt="' . ':rarisuck:' . '" />';

    $b['texts'][] = ':raritylizard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/raritylizard.png' . '" alt="' . ':raritylizard:' . '" />';

    $b['texts'][] = ':rarityplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rarityplot.png' . '" alt="' . ':rarityplot:' . '" />';

    $b['texts'][] = ':rarshake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rarshake.png' . '" alt="' . ':rarshake:' . '" />';

    $b['texts'][] = ':rat20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rat20.png' . '" alt="' . ':rat20:' . '" />';

    $b['texts'][] = ':ravenraven:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ravenraven.png' . '" alt="' . ':ravenraven:' . '" />';

    $b['texts'][] = ':rbabyplease:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbabyplease.png' . '" alt="' . ':rbabyplease:' . '" />';

    $b['texts'][] = ':rbacon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbacon.png' . '" alt="' . ':rbacon:' . '" />';

    $b['texts'][] = ':rbanana:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbanana.png' . '" alt="' . ':rbanana:' . '" />';

    $b['texts'][] = ':rbpa00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpa00.png' . '" alt="' . ':rbpa00:' . '" />';

    $b['texts'][] = ':rbpa10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpa10.png' . '" alt="' . ':rbpa10:' . '" />';

    $b['texts'][] = ':rbpa13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpa13.png' . '" alt="' . ':rbpa13:' . '" />';

    $b['texts'][] = ':rbpa20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpa20.png' . '" alt="' . ':rbpa20:' . '" />';

    $b['texts'][] = ':rbpb20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpb20.png' . '" alt="' . ':rbpb20:' . '" />';

    $b['texts'][] = ':rbpb27:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpb27.png' . '" alt="' . ':rbpb27:' . '" />';

    $b['texts'][] = ':rbpc06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpc06.png' . '" alt="' . ':rbpc06:' . '" />';

    $b['texts'][] = ':rbpc16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpc16.png' . '" alt="' . ':rbpc16:' . '" />';

    $b['texts'][] = ':rbpd21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpd21.png' . '" alt="' . ':rbpd21:' . '" />';

    $b['texts'][] = ':rbpd23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpd23.png' . '" alt="' . ':rbpd23:' . '" />';

    $b['texts'][] = ':rbpd27:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpd27.png' . '" alt="' . ':rbpd27:' . '" />';

    $b['texts'][] = ':rbpe06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpe06.png' . '" alt="' . ':rbpe06:' . '" />';

    $b['texts'][] = ':rbpe09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpe09.png' . '" alt="' . ':rbpe09:' . '" />';

    $b['texts'][] = ':rbpe16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpe16.png' . '" alt="' . ':rbpe16:' . '" />';

    $b['texts'][] = ':rbpe22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpe22.png' . '" alt="' . ':rbpe22:' . '" />';

    $b['texts'][] = ':rbpe69:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpe69.png' . '" alt="' . ':rbpe69:' . '" />';

    $b['texts'][] = ':rbpe70:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpe70.png' . '" alt="' . ':rbpe70:' . '" />';

    $b['texts'][] = ':rbpe74:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpe74.png' . '" alt="' . ':rbpe74:' . '" />';

    $b['texts'][] = ':rbpe94:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpe94.png' . '" alt="' . ':rbpe94:' . '" />';

    $b['texts'][] = ':rbpf00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpf00.png' . '" alt="' . ':rbpf00:' . '" />';

    $b['texts'][] = ':rbpf17:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpf17.png' . '" alt="' . ':rbpf17:' . '" />';

    $b['texts'][] = ':rbpf20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpf20.png' . '" alt="' . ':rbpf20:' . '" />';

    $b['texts'][] = ':rbpf66:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpf66.png' . '" alt="' . ':rbpf66:' . '" />';

    $b['texts'][] = ':rbpf75:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpf75.png' . '" alt="' . ':rbpf75:' . '" />';

    $b['texts'][] = ':rbpg03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg03.png' . '" alt="' . ':rbpg03:' . '" />';

    $b['texts'][] = ':rbpg04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg04.png' . '" alt="' . ':rbpg04:' . '" />';

    $b['texts'][] = ':rbpg06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg06.png' . '" alt="' . ':rbpg06:' . '" />';

    $b['texts'][] = ':rbpg09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg09.png' . '" alt="' . ':rbpg09:' . '" />';

    $b['texts'][] = ':rbpg34:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg34.png' . '" alt="' . ':rbpg34:' . '" />';

    $b['texts'][] = ':rbpg44:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg44.png' . '" alt="' . ':rbpg44:' . '" />';

    $b['texts'][] = ':rbpg46:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg46.png' . '" alt="' . ':rbpg46:' . '" />';

    $b['texts'][] = ':rbpg56:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg56.png' . '" alt="' . ':rbpg56:' . '" />';

    $b['texts'][] = ':rbpg73:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg73.png' . '" alt="' . ':rbpg73:' . '" />';

    $b['texts'][] = ':rbpg74:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg74.png' . '" alt="' . ':rbpg74:' . '" />';

    $b['texts'][] = ':rbpg75:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg75.png' . '" alt="' . ':rbpg75:' . '" />';

    $b['texts'][] = ':rbpg96:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbpg96.png' . '" alt="' . ':rbpg96:' . '" />';

    $b['texts'][] = ':rbrodyhover:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbrodyhover.png' . '" alt="' . ':rbrodyhover:' . '" />';

    $b['texts'][] = ':rbuzz:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rbuzz.png' . '" alt="' . ':rbuzz:' . '" />';

    $b['texts'][] = ':rcelordv:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rcelordv.png' . '" alt="' . ':rcelordv:' . '" />';

    $b['texts'][] = ':rcl00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rcl00.png' . '" alt="' . ':rcl00:' . '" />';

    $b['texts'][] = ':rcrfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rcrfun.png' . '" alt="' . ':rcrfun:' . '" />';

    $b['texts'][] = ':rda07:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rda07.png' . '" alt="' . ':rda07:' . '" />';

    $b['texts'][] = ':rda16:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rda16.png' . '" alt="' . ':rda16:' . '" />';

    $b['texts'][] = ':rdalek:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdalek.png' . '" alt="' . ':rdalek:' . '" />';

    $b['texts'][] = ':rdbrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdbrick.png' . '" alt="' . ':rdbrick:' . '" />';

    $b['texts'][] = ':rdgrunkle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdgrunkle.png' . '" alt="' . ':rdgrunkle:' . '" />';

    $b['texts'][] = ':rdittochoke:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdittochoke.png' . '" alt="' . ':rdittochoke:' . '" />';

    $b['texts'][] = ':rditto:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rditto.png' . '" alt="' . ':rditto:' . '" />';

    $b['texts'][] = ':rdm17:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdm17.png' . '" alt="' . ':rdm17:' . '" />';

    $b['texts'][] = ':rdsocks:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdsocks.png' . '" alt="' . ':rdsocks:' . '" />';

    $b['texts'][] = ':rdthor:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdthor.png' . '" alt="' . ':rdthor:' . '" />';

    $b['texts'][] = ':rdw09:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdw09.png' . '" alt="' . ':rdw09:' . '" />';

    $b['texts'][] = ':rdw12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdw12.png' . '" alt="' . ':rdw12:' . '" />';

    $b['texts'][] = ':rdw22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdw22.png' . '" alt="' . ':rdw22:' . '" />';

    $b['texts'][] = ':rdxxxmas:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rdxxxmas.png' . '" alt="' . ':rdxxxmas:' . '" />';

    $b['texts'][] = ':readingrainbow:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/readingrainbow.png' . '" alt="' . ':readingrainbow:' . '" />';

    $b['texts'][] = ':reggie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/reggie.png' . '" alt="' . ':reggie:' . '" />';

    $b['texts'][] = ':remumask:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/remumask.png' . '" alt="' . ':remumask:' . '" />';

    $b['texts'][] = ':reqgtno:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/reqgtno.png' . '" alt="' . ':reqgtno:' . '" />';

    $b['texts'][] = ':rfrank:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rfrank.png' . '" alt="' . ':rfrank:' . '" />';

    $b['texts'][] = ':rfriedricer:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rfriedricer.png' . '" alt="' . ':rfriedricer:' . '" />';

    $b['texts'][] = ':rfutashy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rfutashy.png' . '" alt="' . ':rfutashy:' . '" />';

    $b['texts'][] = ':rgotmarin:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rgotmarin.png' . '" alt="' . ':rgotmarin:' . '" />';

    $b['texts'][] = ':rhindsight:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rhindsight.png' . '" alt="' . ':rhindsight:' . '" />';

    $b['texts'][] = ':rigby:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rigby.png' . '" alt="' . ':rigby:' . '" />';

    $b['texts'][] = ':rilfsquid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rilfsquid.png' . '" alt="' . ':rilfsquid:' . '" />';

    $b['texts'][] = ':ripferrbearand20andal:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ripferrbearand20andal.png' . '" alt="' . ':ripferrbearand20andal:' . '" />';

    $b['texts'][] = ':ripferrbearand20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ripferrbearand20.png' . '" alt="' . ':ripferrbearand20:' . '" />';

    $b['texts'][] = ':riverangry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/riverangry.png' . '" alt="' . ':riverangry:' . '" />';

    $b['texts'][] = ':riversleep:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/riversleep.png' . '" alt="' . ':riversleep:' . '" />';

    $b['texts'][] = ':rjake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rjake.png' . '" alt="' . ':rjake:' . '" />';

    $b['texts'][] = ':rjohnfreeman:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rjohnfreeman.png' . '" alt="' . ':rjohnfreeman:' . '" />';

    $b['texts'][] = ':rkoolaid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rkoolaid.png' . '" alt="' . ':rkoolaid:' . '" />';

    $b['texts'][] = ':rkwuala:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rkwuala.png' . '" alt="' . ':rkwuala:' . '" />';

    $b['texts'][] = ':rmeatballs:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rmeatballs.png' . '" alt="' . ':rmeatballs:' . '" />';

    $b['texts'][] = ':rmyaah:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rmyaah.png' . '" alt="' . ':rmyaah:' . '" />';

    $b['texts'][] = ':rmystuff:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rmystuff.png' . '" alt="' . ':rmystuff:' . '" />';

    $b['texts'][] = ':rnekocool:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rnekocool.png' . '" alt="' . ':rnekocool:' . '" />';

    $b['texts'][] = ':rnessie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rnessie.png' . '" alt="' . ':rnessie:' . '" />';

    $b['texts'][] = ':robbierotten:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/robbierotten.png' . '" alt="' . ':robbierotten:' . '" />';

    $b['texts'][] = ':roblightsparkten:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/roblightsparkten.png' . '" alt="' . ':roblightsparkten:' . '" />';

    $b['texts'][] = ':rockhard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rockhard.png' . '" alt="' . ':rockhard:' . '" />';

    $b['texts'][] = ':rocksoff:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rocksoff.png' . '" alt="' . ':rocksoff:' . '" />';

    $b['texts'][] = ':rohhited:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rohhited.png' . '" alt="' . ':rohhited:' . '" />';

    $b['texts'][] = ':rohnoes:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rohnoes.png' . '" alt="' . ':rohnoes:' . '" />';

    $b['texts'][] = ':rollerconky:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rollerconky.png' . '" alt="' . ':rollerconky:' . '" />';

    $b['texts'][] = ':romelet:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/romelet.png' . '" alt="' . ':romelet:' . '" />';

    $b['texts'][] = ':romney:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/romney.png' . '" alt="' . ':romney:' . '" />';

    $b['texts'][] = ':roofies:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/roofies.png' . '" alt="' . ':roofies:' . '" />';

    $b['texts'][] = ':rosebutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rosebutt.png' . '" alt="' . ':rosebutt:' . '" />';

    $b['texts'][] = ':roseduck:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/roseduck.png' . '" alt="' . ':roseduck:' . '" />';

    $b['texts'][] = ':rosefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rosefun.png' . '" alt="' . ':rosefun:' . '" />';

    $b['texts'][] = ':royalflush:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/royalflush.png' . '" alt="' . ':royalflush:' . '" />';

    $b['texts'][] = ':rpear:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rpear.png' . '" alt="' . ':rpear:' . '" />';

    $b['texts'][] = ':rphil:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rphil.png' . '" alt="' . ':rphil:' . '" />';

    $b['texts'][] = ':rpl02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rpl02.png' . '" alt="' . ':rpl02:' . '" />';

    $b['texts'][] = ':rpl03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rpl03.png' . '" alt="' . ':rpl03:' . '" />';

    $b['texts'][] = ':rpwobjection:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rpwobjection.png' . '" alt="' . ':rpwobjection:' . '" />';

    $b['texts'][] = ':rpyro:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rpyro.png' . '" alt="' . ':rpyro:' . '" />';

    $b['texts'][] = ':rrarityplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rrarityplot.png' . '" alt="' . ':rrarityplot:' . '" />';

    $b['texts'][] = ':rrbrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rrbrick.png' . '" alt="' . ':rrbrick:' . '" />';

    $b['texts'][] = ':rrigby:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rrigby.png' . '" alt="' . ':rrigby:' . '" />';

    $b['texts'][] = ':rsadbee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rsadbee.png' . '" alt="' . ':rsadbee:' . '" />';

    $b['texts'][] = ':rsbf:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rsbf.png' . '" alt="' . ':rsbf:' . '" />';

    $b['texts'][] = ':rsexydungeon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rsexydungeon.png' . '" alt="' . ':rsexydungeon:' . '" />';

    $b['texts'][] = ':rsharkwell:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rsharkwell.png' . '" alt="' . ':rsharkwell:' . '" />';

    $b['texts'][] = ':rsmalltardis:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rsmalltardis.png' . '" alt="' . ':rsmalltardis:' . '" />';

    $b['texts'][] = ':rsonichu:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rsonichu.png' . '" alt="' . ':rsonichu:' . '" />';

    $b['texts'][] = ':rspiderity:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rspiderity.png' . '" alt="' . ':rspiderity:' . '" />';

    $b['texts'][] = ':rsquidward:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rsquidward.png' . '" alt="' . ':rsquidward:' . '" />';

    $b['texts'][] = ':rsshorror:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rsshorror.png' . '" alt="' . ':rsshorror:' . '" />';

    $b['texts'][] = ':rssterror:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rssterror.png' . '" alt="' . ':rssterror:' . '" />';

    $b['texts'][] = ':rtaviplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rtaviplot.png' . '" alt="' . ':rtaviplot:' . '" />';

    $b['texts'][] = ':rthisisdog:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rthisisdog.png' . '" alt="' . ':rthisisdog:' . '" />';

    $b['texts'][] = ':rtrogdor:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rtrogdor.png' . '" alt="' . ':rtrogdor:' . '" />';

    $b['texts'][] = ':rtwiplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rtwiplot.png' . '" alt="' . ':rtwiplot:' . '" />';

    $b['texts'][] = ':rubydrip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rubydrip.png' . '" alt="' . ':rubydrip:' . '" />';

    $b['texts'][] = ':rule63:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rule63.png' . '" alt="' . ':rule63:' . '" />';

    $b['texts'][] = ':rvinylshake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rvinylshake.png' . '" alt="' . ':rvinylshake:' . '" />';

    $b['texts'][] = ':rvyplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rvyplot.png' . '" alt="' . ':rvyplot:' . '" />';

    $b['texts'][] = ':rwaffleheart:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rwaffleheart.png' . '" alt="' . ':rwaffleheart:' . '" />';

    $b['texts'][] = ':rweegee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rweegee.png' . '" alt="' . ':rweegee:' . '" />';

    $b['texts'][] = ':rwololo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rwololo.png' . '" alt="' . ':rwololo:' . '" />';

    $b['texts'][] = ':rzoidberg:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/rzoidberg.png' . '" alt="' . ':rzoidberg:' . '" />';

    $b['texts'][] = ':sadbee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sadbee.png' . '" alt="' . ':sadbee:' . '" />';

    $b['texts'][] = ':sadmonogram:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sadmonogram.png' . '" alt="' . ':sadmonogram:' . '" />';

    $b['texts'][] = ':sagepuke:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sagepuke.png' . '" alt="' . ':sagepuke:' . '" />';

    $b['texts'][] = ':saintcowchaser:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/saintcowchaser.png' . '" alt="' . ':saintcowchaser:' . '" />';

    $b['texts'][] = ':salutesmeg:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/salutesmeg.png' . '" alt="' . ':salutesmeg:' . '" />';

    $b['texts'][] = ':sansjudge:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sansjudge.png' . '" alt="' . ':sansjudge:' . '" />';

    $b['texts'][] = ':sansmegalovania:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sansmegalovania.png' . '" alt="' . ':sansmegalovania:' . '" />';

    $b['texts'][] = ':sans:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sans.png' . '" alt="' . ':sans:' . '" />';

    $b['texts'][] = ':sansshifty:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sansshifty.png' . '" alt="' . ':sansshifty:' . '" />';

    $b['texts'][] = ':sanssleep:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sanssleep.png' . '" alt="' . ':sanssleep:' . '" />';

    $b['texts'][] = ':sanswink:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sanswink.png' . '" alt="' . ':sanswink:' . '" />';

    $b['texts'][] = ':saultspartan:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/saultspartan.png' . '" alt="' . ':saultspartan:' . '" />';

    $b['texts'][] = ':sausagefest:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sausagefest.png' . '" alt="' . ':sausagefest:' . '" />';

    $b['texts'][] = ':savvybeanfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/savvybeanfun.png' . '" alt="' . ':savvybeanfun:' . '" />';

    $b['texts'][] = ':sbbrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sbbrick.png' . '" alt="' . ':sbbrick:' . '" />';

    $b['texts'][] = ':sbf:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sbf.png' . '" alt="' . ':sbf:' . '" />';

    $b['texts'][] = ':sbfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sbfun.png' . '" alt="' . ':sbfun:' . '" />';

    $b['texts'][] = ':sbinnuendo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sbinnuendo.png' . '" alt="' . ':sbinnuendo:' . '" />';

    $b['texts'][] = ':sciencebitch:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sciencebitch.png' . '" alt="' . ':sciencebitch:' . '" />';

    $b['texts'][] = ':scimatman:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/scimatman.png' . '" alt="' . ':scimatman:' . '" />';

    $b['texts'][] = ':scootabrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/scootabrick.png' . '" alt="' . ':scootabrick:' . '" />';

    $b['texts'][] = ':scootabutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/scootabutt.png' . '" alt="' . ':scootabutt:' . '" />';

    $b['texts'][] = ':scootafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/scootafun.png' . '" alt="' . ':scootafun:' . '" />';

    $b['texts'][] = ':scootsshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/scootsshrug.png' . '" alt="' . ':scootsshrug:' . '" />';

    $b['texts'][] = ':seahoers:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/seahoers.png' . '" alt="' . ':seahoers:' . '" />';

    $b['texts'][] = ':seanigel:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/seanigel.png' . '" alt="' . ':seanigel:' . '" />';

    $b['texts'][] = ':secretcat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/secretcat.png' . '" alt="' . ':secretcat:' . '" />';

    $b['texts'][] = ':seductivecadance:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/seductivecadance.png' . '" alt="' . ':seductivecadance:' . '" />';

    $b['texts'][] = ':selfsuck:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/selfsuck.png' . '" alt="' . ':selfsuck:' . '" />';

    $b['texts'][] = ':sexualpleasure:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sexualpleasure.png' . '" alt="' . ':sexualpleasure:' . '" />';

    $b['texts'][] = ':sexydungeon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sexydungeon.png' . '" alt="' . ':sexydungeon:' . '" />';

    $b['texts'][] = ':sexygaming:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sexygaming.png' . '" alt="' . ':sexygaming:' . '" />';

    $b['texts'][] = ':sexyils:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sexyils.png' . '" alt="' . ':sexyils:' . '" />';

    $b['texts'][] = ':sexyzecoramaid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sexyzecoramaid.png' . '" alt="' . ':sexyzecoramaid:' . '" />';

    $b['texts'][] = ':sffinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sffinish.png' . '" alt="' . ':sffinish:' . '" />';

    $b['texts'][] = ':sgwsi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sgwsi.png' . '" alt="' . ':sgwsi:' . '" />';

    $b['texts'][] = ':shakedatassluna:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shakedatassluna.png' . '" alt="' . ':shakedatassluna:' . '" />';

    $b['texts'][] = ':shakedatassmatt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shakedatassmatt.png' . '" alt="' . ':shakedatassmatt:' . '" />';

    $b['texts'][] = ':shakethatass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shakethatass.png' . '" alt="' . ':shakethatass:' . '" />';

    $b['texts'][] = ':shantae:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shantae.png' . '" alt="' . ':shantae:' . '" />';

    $b['texts'][] = ':sharkwell:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sharkwell.png' . '" alt="' . ':sharkwell:' . '" />';

    $b['texts'][] = ':shhnotears:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shhnotears.png' . '" alt="' . ':shhnotears:' . '" />';

    $b['texts'][] = ':shibedash:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibedash.png' . '" alt="' . ':shibedash:' . '" />';

    $b['texts'][] = ':shibederp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibederp.png' . '" alt="' . ':shibederp:' . '" />';

    $b['texts'][] = ':shibeluna:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibeluna.png' . '" alt="' . ':shibeluna:' . '" />';

    $b['texts'][] = ':shibelyra:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibelyra.png' . '" alt="' . ':shibelyra:' . '" />';

    $b['texts'][] = ':shibemena:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibemena.png' . '" alt="' . ':shibemena:' . '" />';

    $b['texts'][] = ':shibepie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibepie.png' . '" alt="' . ':shibepie:' . '" />';

    $b['texts'][] = ':shibe:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibe.png' . '" alt="' . ':shibe:' . '" />';

    $b['texts'][] = ':shibeshy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibeshy.png' . '" alt="' . ':shibeshy:' . '" />';

    $b['texts'][] = ':shibess:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibess.png' . '" alt="' . ':shibess:' . '" />';

    $b['texts'][] = ':shibetwi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shibetwi.png' . '" alt="' . ':shibetwi:' . '" />';

    $b['texts'][] = ':shimmerworry:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shimmerworry.png' . '" alt="' . ':shimmerworry:' . '" />';

    $b['texts'][] = ':shitemote:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shitemote.png' . '" alt="' . ':shitemote:' . '" />';

    $b['texts'][] = ':shitgotreal:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shitgotreal.png' . '" alt="' . ':shitgotreal:' . '" />';

    $b['texts'][] = ':shodan:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shodan.png' . '" alt="' . ':shodan:' . '" />';

    $b['texts'][] = ':shutupmarm:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shutupmarm.png' . '" alt="' . ':shutupmarm:' . '" />';

    $b['texts'][] = ':shutup:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shutup.png' . '" alt="' . ':shutup:' . '" />';

    $b['texts'][] = ':shybelle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shybelle.png' . '" alt="' . ':shybelle:' . '" />';

    $b['texts'][] = ':shybloom:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shybloom.png' . '" alt="' . ':shybloom:' . '" />';

    $b['texts'][] = ':shyfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shyfun.png' . '" alt="' . ':shyfun:' . '" />';

    $b['texts'][] = ':shykisscock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shykisscock.png' . '" alt="' . ':shykisscock:' . '" />';

    $b['texts'][] = ':shytwi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/shytwi.png' . '" alt="' . ':shytwi:' . '" />';

    $b['texts'][] = ':sisterlylove:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sisterlylove.png' . '" alt="' . ':sisterlylove:' . '" />';

    $b['texts'][] = ':sistersprankton:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sistersprankton.png' . '" alt="' . ':sistersprankton:' . '" />';

    $b['texts'][] = ':skatingconky:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/skatingconky.png' . '" alt="' . ':skatingconky:' . '" />';

    $b['texts'][] = ':skippytherock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/skippytherock.png' . '" alt="' . ':skippytherock:' . '" />';

    $b['texts'][] = ':skyfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/skyfun.png' . '" alt="' . ':skyfun:' . '" />';

    $b['texts'][] = ':slutfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/slutfun.png' . '" alt="' . ':slutfun:' . '" />';

    $b['texts'][] = ':smallma:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/smallma.png' . '" alt="' . ':smallma:' . '" />';

    $b['texts'][] = ':smalltardis:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/smalltardis.png' . '" alt="' . ':smalltardis:' . '" />';

    $b['texts'][] = ':smashingyak:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/smashingyak.png' . '" alt="' . ':smashingyak:' . '" />';

    $b['texts'][] = ':smfds:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/smfds.png' . '" alt="' . ':smfds:' . '" />';

    $b['texts'][] = ':smothered:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/smothered.png' . '" alt="' . ':smothered:' . '" />';

    $b['texts'][] = ':smugass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/smugass.png' . '" alt="' . ':smugass:' . '" />';

    $b['texts'][] = ':soarinmount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/soarinmount.png' . '" alt="' . ':soarinmount:' . '" />';

    $b['texts'][] = ':somanybuttons:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/somanybuttons.png' . '" alt="' . ':somanybuttons:' . '" />';

    $b['texts'][] = ':sonatass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sonatass.png' . '" alt="' . ':sonatass:' . '" />';

    $b['texts'][] = ':soniccane:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/soniccane.png' . '" alt="' . ':soniccane:' . '" />';

    $b['texts'][] = ':sonichu:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sonichu.png' . '" alt="' . ':sonichu:' . '" />';

    $b['texts'][] = ':spacejam:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spacejam.png' . '" alt="' . ':spacejam:' . '" />';

    $b['texts'][] = ':space:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/space.png' . '" alt="' . ':space:' . '" />';

    $b['texts'][] = ':spaceunicorndeliveringtherainbowsallaroundtheworld:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spaceunicorndeliveringtherainbowsallaroundtheworld.png' . '" alt="' . ':spaceunicorndeliveringtherainbowsallaroundtheworld:' . '" />';

    $b['texts'][] = ':spamsprakle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spamsprakle.png' . '" alt="' . ':spamsprakle:' . '" />';

    $b['texts'][] = ':speedyfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/speedyfun.png' . '" alt="' . ':speedyfun:' . '" />';

    $b['texts'][] = ':sphlyrafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sphlyrafun.png' . '" alt="' . ':sphlyrafun:' . '" />';

    $b['texts'][] = ':spiderity:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spiderity.png' . '" alt="' . ':spiderity:' . '" />';

    $b['texts'][] = ':spidey2:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spidey2.png' . '" alt="' . ':spidey2:' . '" />';

    $b['texts'][] = ':spidey:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spidey.png' . '" alt="' . ':spidey:' . '" />';

    $b['texts'][] = ':spitbutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spitbutt.png' . '" alt="' . ':spitbutt:' . '" />';

    $b['texts'][] = ':spitdom:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spitdom.png' . '" alt="' . ':spitdom:' . '" />';

    $b['texts'][] = ':spookyskellington:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spookyskellington.png' . '" alt="' . ':spookyskellington:' . '" />';

    $b['texts'][] = ':spraklefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spraklefun.png' . '" alt="' . ':spraklefun:' . '" />';

    $b['texts'][] = ':sprankton:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sprankton.png' . '" alt="' . ':sprankton:' . '" />';

    $b['texts'][] = ':spreadingcadance:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/spreadingcadance.png' . '" alt="' . ':spreadingcadance:' . '" />';

    $b['texts'][] = ':sq00:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq00.png' . '" alt="' . ':sq00:' . '" />';

    $b['texts'][] = ':sq01:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq01.png' . '" alt="' . ':sq01:' . '" />';

    $b['texts'][] = ':sq02:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq02.png' . '" alt="' . ':sq02:' . '" />';

    $b['texts'][] = ':sq03:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq03.png' . '" alt="' . ':sq03:' . '" />';

    $b['texts'][] = ':sq04:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq04.png' . '" alt="' . ':sq04:' . '" />';

    $b['texts'][] = ':sq05:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq05.png' . '" alt="' . ':sq05:' . '" />';

    $b['texts'][] = ':sq06:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq06.png' . '" alt="' . ':sq06:' . '" />';

    $b['texts'][] = ':sq10:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq10.png' . '" alt="' . ':sq10:' . '" />';

    $b['texts'][] = ':sq11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq11.png' . '" alt="' . ':sq11:' . '" />';

    $b['texts'][] = ':sq12:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq12.png' . '" alt="' . ':sq12:' . '" />';

    $b['texts'][] = ':sq13:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq13.png' . '" alt="' . ':sq13:' . '" />';

    $b['texts'][] = ':sq14:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq14.png' . '" alt="' . ':sq14:' . '" />';

    $b['texts'][] = ':sq15:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq15.png' . '" alt="' . ':sq15:' . '" />';

    $b['texts'][] = ':sq20:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq20.png' . '" alt="' . ':sq20:' . '" />';

    $b['texts'][] = ':sq21:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq21.png' . '" alt="' . ':sq21:' . '" />';

    $b['texts'][] = ':sq22:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq22.png' . '" alt="' . ':sq22:' . '" />';

    $b['texts'][] = ':sq23:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq23.png' . '" alt="' . ':sq23:' . '" />';

    $b['texts'][] = ':sq24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq24.png' . '" alt="' . ':sq24:' . '" />';

    $b['texts'][] = ':sq25:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sq25.png' . '" alt="' . ':sq25:' . '" />';

    $b['texts'][] = ':sqajfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqajfun.png' . '" alt="' . ':sqajfun:' . '" />';

    $b['texts'][] = ':sqbonfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqbonfun.png' . '" alt="' . ':sqbonfun:' . '" />';

    $b['texts'][] = ':sqcelestiafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqcelestiafun.png' . '" alt="' . ':sqcelestiafun:' . '" />';

    $b['texts'][] = ':sqcheerfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqcheerfun.png' . '" alt="' . ':sqcheerfun:' . '" />';

    $b['texts'][] = ':sqdashfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqdashfun.png' . '" alt="' . ':sqdashfun:' . '" />';

    $b['texts'][] = ':sqderpfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqderpfun.png' . '" alt="' . ':sqderpfun:' . '" />';

    $b['texts'][] = ':sqlunafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqlunafun.png' . '" alt="' . ':sqlunafun:' . '" />';

    $b['texts'][] = ':sqlyrafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqlyrafun.png' . '" alt="' . ':sqlyrafun:' . '" />';

    $b['texts'][] = ':sqppfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqppfun.png' . '" alt="' . ':sqppfun:' . '" />';

    $b['texts'][] = ':sqrarfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqrarfun.png' . '" alt="' . ':sqrarfun:' . '" />';

    $b['texts'][] = ':sqrosefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqrosefun.png' . '" alt="' . ':sqrosefun:' . '" />';

    $b['texts'][] = ':sqshyfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqshyfun.png' . '" alt="' . ':sqshyfun:' . '" />';

    $b['texts'][] = ':sqstare:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqstare.png' . '" alt="' . ':sqstare:' . '" />';

    $b['texts'][] = ':sqtrixiefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqtrixiefun.png' . '" alt="' . ':sqtrixiefun:' . '" />';

    $b['texts'][] = ':sqtwifun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sqtwifun.png' . '" alt="' . ':sqtwifun:' . '" />';

    $b['texts'][] = ':squidaloo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidaloo.png' . '" alt="' . ':squidaloo:' . '" />';

    $b['texts'][] = ':squidamena:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidamena.png' . '" alt="' . ':squidamena:' . '" />';

    $b['texts'][] = ':squiddity:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squiddity.png' . '" alt="' . ':squiddity:' . '" />';

    $b['texts'][] = ':squidew:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidew.png' . '" alt="' . ':squidew:' . '" />';

    $b['texts'][] = ':squidflip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidflip.png' . '" alt="' . ':squidflip:' . '" />';

    $b['texts'][] = ':squidfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidfun.png' . '" alt="' . ':squidfun:' . '" />';

    $b['texts'][] = ':squidhoof:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidhoof.png' . '" alt="' . ':squidhoof:' . '" />';

    $b['texts'][] = ':squidhorsie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidhorsie.png' . '" alt="' . ':squidhorsie:' . '" />';

    $b['texts'][] = ':squidohyou:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidohyou.png' . '" alt="' . ':squidohyou:' . '" />';

    $b['texts'][] = ':squid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squid.png' . '" alt="' . ':squid:' . '" />';

    $b['texts'][] = ':squidrage:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidrage.png' . '" alt="' . ':squidrage:' . '" />';

    $b['texts'][] = ':squidsalute:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidsalute.png' . '" alt="' . ':squidsalute:' . '" />';

    $b['texts'][] = ':squidscream:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidscream.png' . '" alt="' . ':squidscream:' . '" />';

    $b['texts'][] = ':squidshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidshrug.png' . '" alt="' . ':squidshrug:' . '" />';

    $b['texts'][] = ':squidsrs:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidsrs.png' . '" alt="' . ':squidsrs:' . '" />';

    $b['texts'][] = ':squidticking:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidticking.png' . '" alt="' . ':squidticking:' . '" />';

    $b['texts'][] = ':squidward:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidward.png' . '" alt="' . ':squidward:' . '" />';

    $b['texts'][] = ':squidwhoa:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squidwhoa.png' . '" alt="' . ':squidwhoa:' . '" />';

    $b['texts'][] = ':squintysquid:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squintysquid.png' . '" alt="' . ':squintysquid:' . '" />';

    $b['texts'][] = ':squishypie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squishypie.png' . '" alt="' . ':squishypie:' . '" />';

    $b['texts'][] = ':squixie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/squixie.png' . '" alt="' . ':squixie:' . '" />';

    $b['texts'][] = ':srslypickled:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/srslypickled.png' . '" alt="' . ':srslypickled:' . '" />';

    $b['texts'][] = ':ssdoge:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ssdoge.png' . '" alt="' . ':ssdoge:' . '" />';

    $b['texts'][] = ':ssfinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ssfinish.png' . '" alt="' . ':ssfinish:' . '" />';

    $b['texts'][] = ':sshorror:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sshorror.png' . '" alt="' . ':sshorror:' . '" />';

    $b['texts'][] = ':ssterror:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/ssterror.png' . '" alt="' . ':ssterror:' . '" />';

    $b['texts'][] = ':st3rox:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/st3rox.png' . '" alt="' . ':st3rox:' . '" />';

    $b['texts'][] = ':stairmaster:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/stairmaster.png' . '" alt="' . ':stairmaster:' . '" />';

    $b['texts'][] = ':stamponthebulb:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/stamponthebulb.png' . '" alt="' . ':stamponthebulb:' . '" />';

    $b['texts'][] = ':starburstseduce:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/starburstseduce.png' . '" alt="' . ':starburstseduce:' . '" />';

    $b['texts'][] = ':starlightglizard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/starlightglizard.png' . '" alt="' . ':starlightglizard:' . '" />';

    $b['texts'][] = ':steppin:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/steppin.png' . '" alt="' . ':steppin:' . '" />';

    $b['texts'][] = ':stiltmanisalsfavorite:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/stiltmanisalsfavorite.png' . '" alt="' . ':stiltmanisalsfavorite:' . '" />';

    $b['texts'][] = ':stmount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/stmount.png' . '" alt="' . ':stmount:' . '" />';

    $b['texts'][] = ':stopitboner:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/stopitboner.png' . '" alt="' . ':stopitboner:' . '" />';

    $b['texts'][] = ':stormthebastille:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/stormthebastille.png' . '" alt="' . ':stormthebastille:' . '" />';

    $b['texts'][] = ':stripeass:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/stripeass.png' . '" alt="' . ':stripeass:' . '" />';

    $b['texts'][] = ':stupidsexypinkie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/stupidsexypinkie.png' . '" alt="' . ':stupidsexypinkie:' . '" />';

    $b['texts'][] = ':suckitave:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/suckitave.png' . '" alt="' . ':suckitave:' . '" />';

    $b['texts'][] = ':suckitcowboy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/suckitcowboy.png' . '" alt="' . ':suckitcowboy:' . '" />';

    $b['texts'][] = ':suckit:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/suckit.png' . '" alt="' . ':suckit:' . '" />';

    $b['texts'][] = ':sunandmoon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sunandmoon.png' . '" alt="' . ':sunandmoon:' . '" />';

    $b['texts'][] = ':suncock:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/suncock.png' . '" alt="' . ':suncock:' . '" />';

    $b['texts'][] = ':surfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/surfun.png' . '" alt="' . ':surfun:' . '" />';

    $b['texts'][] = ':surplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/surplot.png' . '" alt="' . ':surplot:' . '" />';

    $b['texts'][] = ':sweetiebellesvirginmarshmallowpussy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sweetiebellesvirginmarshmallowpussy.png' . '" alt="' . ':sweetiebellesvirginmarshmallowpussy:' . '" />';

    $b['texts'][] = ':sweetiebutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/sweetiebutt.png' . '" alt="' . ':sweetiebutt:' . '" />';

    $b['texts'][] = ':switchyorgy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/switchyorgy.png' . '" alt="' . ':switchyorgy:' . '" />';

    $b['texts'][] = ':tacofun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tacofun.png' . '" alt="' . ':tacofun:' . '" />';

    $b['texts'][] = ':tacomania:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tacomania.png' . '" alt="' . ':tacomania:' . '" />';

    $b['texts'][] = ':tailwraps:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tailwraps.png' . '" alt="' . ':tailwraps:' . '" />';

    $b['texts'][] = ':talkaboutfruitacandy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/talkaboutfruitacandy.png' . '" alt="' . ':talkaboutfruitacandy:' . '" />';

    $b['texts'][] = ':tanktwi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tanktwi.png' . '" alt="' . ':tanktwi:' . '" />';

    $b['texts'][] = ':tardis:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tardis.png' . '" alt="' . ':tardis:' . '" />';

    $b['texts'][] = ':tavipanties:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tavipanties.png' . '" alt="' . ':tavipanties:' . '" />';

    $b['texts'][] = ':tc24:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tc24.png' . '" alt="' . ':tc24:' . '" />';

    $b['texts'][] = ':tdschoolfillies:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tdschoolfillies.png' . '" alt="' . ':tdschoolfillies:' . '" />';

    $b['texts'][] = ':tem:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tem.png' . '" alt="' . ':tem:' . '" />';

    $b['texts'][] = ':tentenwouldmarmshat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tentenwouldmarmshat.png' . '" alt="' . ':tentenwouldmarmshat:' . '" />';

    $b['texts'][] = ':thebaz:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thebaz.png' . '" alt="' . ':thebaz:' . '" />';

    $b['texts'][] = ':theder:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/theder.png' . '" alt="' . ':theder:' . '" />';

    $b['texts'][] = ':theface:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/theface.png' . '" alt="' . ':theface:' . '" />';

    $b['texts'][] = ':themoreyouknow:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/themoreyouknow.png' . '" alt="' . ':themoreyouknow:' . '" />';

    $b['texts'][] = ':themoreyoutwi:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/themoreyoutwi.png' . '" alt="' . ':themoreyoutwi:' . '" />';

    $b['texts'][] = ':therideneverends:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/therideneverends.png' . '" alt="' . ':therideneverends:' . '" />';

    $b['texts'][] = ':thesafewordisbeard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thesafewordisbeard.png' . '" alt="' . ':thesafewordisbeard:' . '" />';

    $b['texts'][] = ':thesafewordisfluffle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thesafewordisfluffle.png' . '" alt="' . ':thesafewordisfluffle:' . '" />';

    $b['texts'][] = ':theydied:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/theydied.png' . '" alt="' . ':theydied:' . '" />';

    $b['texts'][] = ':thirtyseventimesinthechest:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thirtyseventimesinthechest.png' . '" alt="' . ':thirtyseventimesinthechest:' . '" />';

    $b['texts'][] = ':thisisanemote:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thisisanemote.png' . '" alt="' . ':thisisanemote:' . '" />';

    $b['texts'][] = ':thisisbat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thisisbat.png' . '" alt="' . ':thisisbat:' . '" />';

    $b['texts'][] = ':thisisdog:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thisisdog.png' . '" alt="' . ':thisisdog:' . '" />';

    $b['texts'][] = ':thisisnowcanon:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thisisnowcanon.png' . '" alt="' . ':thisisnowcanon:' . '" />';

    $b['texts'][] = ':thumb:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thumb.png' . '" alt="' . ':thumb:' . '" />';

    $b['texts'][] = ':thunderlanefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/thunderlanefun.png' . '" alt="' . ':thunderlanefun:' . '" />';

    $b['texts'][] = ':TI994A:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/TI994A.png' . '" alt="' . ':TI994A:' . '" />';

    $b['texts'][] = ':tiapresenting:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tiapresenting.png' . '" alt="' . ':tiapresenting:' . '" />';

    $b['texts'][] = ':tlfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tlfun.png' . '" alt="' . ':tlfun:' . '" />';

    $b['texts'][] = ':toaster:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/toaster.png' . '" alt="' . ':toaster:' . '" />';

    $b['texts'][] = ':tomxbloombergotp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tomxbloombergotp.png' . '" alt="' . ':tomxbloombergotp:' . '" />';

    $b['texts'][] = ':tootight:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tootight.png' . '" alt="' . ':tootight:' . '" />';

    $b['texts'][] = ':topkek:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/topkek.png' . '" alt="' . ':topkek:' . '" />';

    $b['texts'][] = ':torgo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/torgo.png' . '" alt="' . ':torgo:' . '" />';

    $b['texts'][] = ':torieldisapprove:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/torieldisapprove.png' . '" alt="' . ':torieldisapprove:' . '" />';

    $b['texts'][] = ':torielhappy:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/torielhappy.png' . '" alt="' . ':torielhappy:' . '" />';

    $b['texts'][] = ':trixfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixfun.png' . '" alt="' . ':trixfun:' . '" />';

    $b['texts'][] = ':trixicone:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixicone.png' . '" alt="' . ':trixicone:' . '" />';

    $b['texts'][] = ':trixiecum:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixiecum.png' . '" alt="' . ':trixiecum:' . '" />';

    $b['texts'][] = ':trixiefinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixiefinish.png' . '" alt="' . ':trixiefinish:' . '" />';

    $b['texts'][] = ':trixiefun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixiefun.png' . '" alt="' . ':trixiefun:' . '" />';

    $b['texts'][] = ':TrixieLovesPlot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/TrixieLovesPlot.png' . '" alt="' . ':TrixieLovesPlot:' . '" />';

    $b['texts'][] = ':trixieplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixieplot.png' . '" alt="' . ':trixieplot:' . '" />';

    $b['texts'][] = ':trixiepresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixiepresents.png' . '" alt="' . ':trixiepresents:' . '" />';

    $b['texts'][] = ':trixiespread:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixiespread.png' . '" alt="' . ':trixiespread:' . '" />';

    $b['texts'][] = ':trixievoila:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trixievoila.png' . '" alt="' . ':trixievoila:' . '" />';

    $b['texts'][] = ':trogdor:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trogdor.png' . '" alt="' . ':trogdor:' . '" />';

    $b['texts'][] = ':trollshrug:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/trollshrug.png' . '" alt="' . ':trollshrug:' . '" />';

    $b['texts'][] = ':tsbrick:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/tsbrick.png' . '" alt="' . ':tsbrick:' . '" />';

    $b['texts'][] = ':turnip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/turnip.png' . '" alt="' . ':turnip:' . '" />';

    $b['texts'][] = ':turnope:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/turnope.png' . '" alt="' . ':turnope:' . '" />';

    $b['texts'][] = ':twentyfiveminutesofthis:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twentyfiveminutesofthis.png' . '" alt="' . ':twentyfiveminutesofthis:' . '" />';

    $b['texts'][] = ':twentyfive:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twentyfive.png' . '" alt="' . ':twentyfive:' . '" />';

    $b['texts'][] = ':twibadteacher:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twibadteacher.png' . '" alt="' . ':twibadteacher:' . '" />';

    $b['texts'][] = ':twibegentle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twibegentle.png' . '" alt="' . ':twibegentle:' . '" />';

    $b['texts'][] = ':twidrip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twidrip.png' . '" alt="' . ':twidrip:' . '" />';

    $b['texts'][] = ':twifinish:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twifinish.png' . '" alt="' . ':twifinish:' . '" />';

    $b['texts'][] = ':twifun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twifun.png' . '" alt="' . ':twifun:' . '" />';

    $b['texts'][] = ':twiger:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twiger.png' . '" alt="' . ':twiger:' . '" />';

    $b['texts'][] = ':twihearts:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twihearts.png' . '" alt="' . ':twihearts:' . '" />';

    $b['texts'][] = ':twihomer:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twihomer.png' . '" alt="' . ':twihomer:' . '" />';

    $b['texts'][] = ':twilacornpeek:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twilacornpeek.png' . '" alt="' . ':twilacornpeek:' . '" />';

    $b['texts'][] = ':twilicornpeek:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twilicornpeek.png' . '" alt="' . ':twilicornpeek:' . '" />';

    $b['texts'][] = ':twilightstrapkle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twilightstrapkle.png' . '" alt="' . ':twilightstrapkle:' . '" />';

    $b['texts'][] = ':twilipbite:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twilipbite.png' . '" alt="' . ':twilipbite:' . '" />';

    $b['texts'][] = ':twilizard:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twilizard.png' . '" alt="' . ':twilizard:' . '" />';

    $b['texts'][] = ':twinom:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twinom.png' . '" alt="' . ':twinom:' . '" />';

    $b['texts'][] = ':twipanties:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twipanties.png' . '" alt="' . ':twipanties:' . '" />';

    $b['texts'][] = ':twiplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twiplot.png' . '" alt="' . ':twiplot:' . '" />';

    $b['texts'][] = ':twipresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twipresents.png' . '" alt="' . ':twipresents:' . '" />';

    $b['texts'][] = ':twishake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twishake.png' . '" alt="' . ':twishake:' . '" />';

    $b['texts'][] = ':twisockpresents:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twisockpresents.png' . '" alt="' . ':twisockpresents:' . '" />';

    $b['texts'][] = ':twisockspresenting:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twisockspresenting.png' . '" alt="' . ':twisockspresenting:' . '" />';

    $b['texts'][] = ':twispread:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twispread.png' . '" alt="' . ':twispread:' . '" />';

    $b['texts'][] = ':twistcrowbar:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twistcrowbar.png' . '" alt="' . ':twistcrowbar:' . '" />';

    $b['texts'][] = ':twitch_alert:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twitch_alert.png' . '" alt="' . ':twitch_alert:' . '" />';

    $b['texts'][] = ':twitiger:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twitiger.png' . '" alt="' . ':twitiger:' . '" />';

    $b['texts'][] = ':twna:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/twna.png' . '" alt="' . ':twna:' . '" />';

    $b['texts'][] = ':udiditchamp:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/udiditchamp.png' . '" alt="' . ':udiditchamp:' . '" />';

    $b['texts'][] = ':udntfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/udntfun.png' . '" alt="' . ':udntfun:' . '" />';

    $b['texts'][] = ':udntsrslydntnomedood:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/udntsrslydntnomedood.png' . '" alt="' . ':udntsrslydntnomedood:' . '" />';

    $b['texts'][] = ':undying:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/undying.png' . '" alt="' . ':undying:' . '" />';

    $b['texts'][] = ':undynefuhuhu:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/undynefuhuhu.png' . '" alt="' . ':undynefuhuhu:' . '" />';

    $b['texts'][] = ':undyne:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/undyne.png' . '" alt="' . ':undyne:' . '" />';

    $b['texts'][] = ':undyneserious:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/undyneserious.png' . '" alt="' . ':undyneserious:' . '" />';

    $b['texts'][] = ':upron:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/upron.png' . '" alt="' . ':upron:' . '" />';

    $b['texts'][] = ':upvote:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/upvote.png' . '" alt="' . ':upvote:' . '" />';

    $b['texts'][] = ':usawut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/usawut.png' . '" alt="' . ':usawut:' . '" />';

    $b['texts'][] = ':usecrisco:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/usecrisco.png' . '" alt="' . ':usecrisco:' . '" />';

    $b['texts'][] = ':uwotm8:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/uwotm8.png' . '" alt="' . ':uwotm8:' . '" />';

    $b['texts'][] = ':valerie:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/valerie.png' . '" alt="' . ':valerie:' . '" />';

    $b['texts'][] = ':vanal:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vanal.png' . '" alt="' . ':vanal:' . '" />';

    $b['texts'][] = ':venturewtf:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/venturewtf.png' . '" alt="' . ':venturewtf:' . '" />';

    $b['texts'][] = ':vialfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vialfun.png' . '" alt="' . ':vialfun:' . '" />';

    $b['texts'][] = ':vinylbutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vinylbutt.png' . '" alt="' . ':vinylbutt:' . '" />';

    $b['texts'][] = ':vinylshake:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vinylshake.png' . '" alt="' . ':vinylshake:' . '" />';

    $b['texts'][] = ':vsdoge:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vsdoge.png' . '" alt="' . ':vsdoge:' . '" />';

    $b['texts'][] = ':vsdrip:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vsdrip.png' . '" alt="' . ':vsdrip:' . '" />';

    $b['texts'][] = ':vsplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vsplot.png' . '" alt="' . ':vsplot:' . '" />';

    $b['texts'][] = ':vsriver:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vsriver.png' . '" alt="' . ':vsriver:' . '" />';

    $b['texts'][] = ':vsshower:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vsshower.png' . '" alt="' . ':vsshower:' . '" />';

    $b['texts'][] = ':vsweegee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vsweegee.png' . '" alt="' . ':vsweegee:' . '" />';

    $b['texts'][] = ':vyplot:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/vyplot.png' . '" alt="' . ':vyplot:' . '" />';

    $b['texts'][] = ':waffleheart:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/waffleheart.png' . '" alt="' . ':waffleheart:' . '" />';

    $b['texts'][] = ':waffle:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/waffle.png' . '" alt="' . ':waffle:' . '" />';

    $b['texts'][] = ':warpspeed:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/warpspeed.png' . '" alt="' . ':warpspeed:' . '" />';

    $b['texts'][] = ':wdgaster:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wdgaster.png' . '" alt="' . ':wdgaster:' . '" />';

    $b['texts'][] = ':weegee:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/weegee.png' . '" alt="' . ':weegee:' . '" />';

    $b['texts'][] = ':wetcora:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wetcora.png' . '" alt="' . ':wetcora:' . '" />';

    $b['texts'][] = ':wetmoons:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wetmoons.png' . '" alt="' . ':wetmoons:' . '" />';

    $b['texts'][] = ':wetqueen:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wetqueen.png' . '" alt="' . ':wetqueen:' . '" />';

    $b['texts'][] = ':whatalovelybanana:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/whatalovelybanana.png' . '" alt="' . ':whatalovelybanana:' . '" />';

    $b['texts'][] = ':whoers:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/whoers.png' . '" alt="' . ':whoers:' . '" />';

    $b['texts'][] = ':whoislaughingnow:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/whoislaughingnow.png' . '" alt="' . ':whoislaughingnow:' . '" />';

    $b['texts'][] = ':whoovesmount:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/whoovesmount.png' . '" alt="' . ':whoovesmount:' . '" />';

    $b['texts'][] = ':whosad:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/whosad.png' . '" alt="' . ':whosad:' . '" />';

    $b['texts'][] = ':whosaysyouhaveachoice:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/whosaysyouhaveachoice.png' . '" alt="' . ':whosaysyouhaveachoice:' . '" />';

    $b['texts'][] = ':willowfun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/willowfun.png' . '" alt="' . ':willowfun:' . '" />';

    $b['texts'][] = ':winterbutt:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/winterbutt.png' . '" alt="' . ':winterbutt:' . '" />';

    $b['texts'][] = ':wololo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wololo.png' . '" alt="' . ':wololo:' . '" />';

    $b['texts'][] = ':wonderfucks:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wonderfucks.png' . '" alt="' . ':wonderfucks:' . '" />';

    $b['texts'][] = ':wonderjob:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wonderjob.png' . '" alt="' . ':wonderjob:' . '" />';

    $b['texts'][] = ':wooo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wooo.png' . '" alt="' . ':wooo:' . '" />';

    $b['texts'][] = ':woo:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/woo.png' . '" alt="' . ':woo:' . '" />';

    $b['texts'][] = ':worf:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/worf.png' . '" alt="' . ':worf:' . '" />';

    $b['texts'][] = ':wow:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wow.png' . '" alt="' . ':wow:' . '" />';

    $b['texts'][] = ':wowsocane:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wowsocane.png' . '" alt="' . ':wowsocane:' . '" />';

    $b['texts'][] = ':wr3nch:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wr3nch.png' . '" alt="' . ':wr3nch:' . '" />';

    $b['texts'][] = ':wraparound:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wraparound.png' . '" alt="' . ':wraparound:' . '" />';

    $b['texts'][] = ':wubjection:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wubjection.png' . '" alt="' . ':wubjection:' . '" />';

    $b['texts'][] = ':wynaut:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wynaut.png' . '" alt="' . ':wynaut:' . '" />';

    $b['texts'][] = ':wynauttrombone:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/wynauttrombone.png' . '" alt="' . ':wynauttrombone:' . '" />';

    $b['texts'][] = ':yaksmashing:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/yaksmashing.png' . '" alt="' . ':yaksmashing:' . '" />';

    $b['texts'][] = ':yamtophat:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/yamtophat.png' . '" alt="' . ':yamtophat:' . '" />';

    $b['texts'][] = ':YATTAA:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/YATTAA.png' . '" alt="' . ':YATTAA:' . '" />';

    $b['texts'][] = ':yatta!:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/yatta!.png' . '" alt="' . ':yatta!:' . '" />';

    $b['texts'][] = ':yourewinner:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/yourewinner.png' . '" alt="' . ':yourewinner:' . '" />';

    $b['texts'][] = ':youtooktwoshots:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/youtooktwoshots.png' . '" alt="' . ':youtooktwoshots:' . '" />';

    $b['texts'][] = ':z11:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/z11.png' . '" alt="' . ':z11:' . '" />';

    $b['texts'][] = ':zalgoberg:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/zalgoberg.png' . '" alt="' . ':zalgoberg:' . '" />';

    $b['texts'][] = ':zecoraanal:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/zecoraanal.png' . '" alt="' . ':zecoraanal:' . '" />';

    $b['texts'][] = ':zecoraoops:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/zecoraoops.png' . '" alt="' . ':zecoraoops:' . '" />';

    $b['texts'][] = ':zilean:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/zilean.png' . '" alt="' . ':zilean:' . '" />';

    $b['texts'][] = ':zirconiafun:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/zirconiafun.png' . '" alt="' . ':zirconiafun:' . '" />';

    $b['texts'][] = ':zoidberg:';
    $b['icons'][] = '<img class="smiley" src="' . $a->get_baseurl() . '/addon/ponymotes_nsfw/emotes/zoidberg.png' . '" alt="' . ':zoidberg:' . '" />';
}
