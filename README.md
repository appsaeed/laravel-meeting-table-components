# Uses

## Component 1

    <x-studio-profile 
        name="name of the user" 
        location="user location or address"
        image_url="user prifile image url"
    />

## Component 2 

    <x-studio-timetable 
        date='Sun 28 Aug' 
        time='3:00pm' 
        remember_time='30mins' 
        source="This is optional default: Studio and zoom" 
    />

## Component 3 

    <x-studio-about
        title="about the title | default: About the class"
        content="default: Empty!"
    />

## Component 4 

    <x-studio-actions 
        link_find_us='find us link | default: #' 
        link_new_studio='new to studio link | | default: #'
        link_howto_join='how to join link | default: # '
    />

## Component 5 

**simple uses**

    <x-studio-from />

**with attributies all that support html form element**

    <x-studio-from action="/action-url" onsubmit="return false;" id="my_form" />

**Add new Html input/image etc elment (x-slot name="html" is required)**

    <x-studio-form>
        <x-slot name="html"> 
            <input type="hidden" name="timetable_id" value="43092">
            <img src="/path/to/image">
            <button>click here</button>
        </x-slot>              
    </x-studio-form>


**Update form header content (x-slot name="header" is required)**

    <x-studio-form 
        action="/action-url" 
        onsubmit="return false;"
    >
        <x-slot name="header">
            <b>New cotnent</b>
            more content.....
        </x-slot>                
    </x-studio-form>


===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================
===============================================================================

# Reference

So for example, on page https://forbooking.co.uk/v7/thisClass.php?timetableID=3394&classDate=2024-08-28


# Example attaches
##### Components 1
![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/secured-attachments/messaging_message/attachment/ab650162bb1d8a11e1a80e853260967b-1723477091811/Screenshot%202024-08-12%20at%2016.36.23.png?__cld_token__=exp=1723823774~hmac=16f1320a9183e9335625ee195fcca586239b428abcf73715f7d4a3ffdcc7718b)
##### Components 2
![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/secured-attachments/messaging_message/attachment/6f7bda67e23bf4a39236d42c59171085-1723477091823/Screenshot%202024-08-12%20at%2016.36.17.png?__cld_token__=exp=1723823774~hmac=d81701b8d1e3545179dd8d5c4670409fac17058ab17060d4f8ebfb68dbe4db32)
##### Components 3
![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/secured-attachments/messaging_message/attachment/a2cd071477518b4261037c6297cceb77-1723477091807/Screenshot%202024-08-12%20at%2016.36.10.png?__cld_token__=exp=1723823774~hmac=65f9421d217ad4b083d7e53dfae7c46eb4bed4f72c77fc3d2bca9e65806862e0)
##### Components 4
![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto,t_message_attachment_large_thumb/v1/secured-attachments/messaging_message/attachment/709fe36ca2e7e8c7c3bfd311221dbd2f-1723477091792/Screenshot%202024-08-12%20at%2016.35.45.png?__cld_token__=exp=1723823774~hmac=66b92e54e3235fafa02cc4a40610f0cc3009a8001cd6a93f00b79a75d645e664)
##### Components 5
![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/secured-attachments/messaging_message/attachment/067f37c264ccd7665e750a2e4384c0c2-1723477091839/Screenshot%202024-08-12%20at%2016.35.58.png?__cld_token__=exp=1723823774~hmac=59b3bf88d08b53a3af2657e5104f0aec399dce8417bb513fbc7d595a204fa774)

