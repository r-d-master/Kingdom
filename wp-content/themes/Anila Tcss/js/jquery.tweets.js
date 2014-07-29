var addTweets = function()
{       
    $('.tweets').tweet({
        modpath: 'twitter/',
        count: 5,
        loading_text: 'loading twitter feed...',
        username: 'drythemes'
        /* etc... */
    }); 
    
};
///////////////////////////////////////////////////////////////////
jQuery(window).load(function() {
    
    addTweets();
}); 
