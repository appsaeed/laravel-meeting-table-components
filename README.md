#  User page Components
#### user details with image component name (x-user)
paramaters name, welcome, image
Example 1: 

    <x-user  
        name="Hello name." 
        welcome="welcome message." 
        image="image-url.png"
    />

Example 2: (with children components/elements)

    <x-user  
        name="Hello name." 
        welcome="welcome message." 
        image="image-url.png"
    >
        <x-user-status classes="1" minutes="45" since="2024" />
    </x-user>

The component hold user meta details:
    
     <x-user-status classes="1" minutes="45" since="2024" /> 



#### shadow component 
Shadow component same as single div and this accect all div support attributes e.g id, class, style etc.
    
    <x-shadow class="custom-class">
        Place any data you want
    </x-shadow>

example

    <x-shadow>
        add elements/components
    </x-shadow>


#### attendance-info component
attendance-info email is required
paramaters: email, passes_link, attendance_link, details_link, id, class, style etc.

    <x-attendance-info 
        email="email@company.com" 
        passes_link='link of the passes'
        attendance_link='link of attendance'
        details_link='details link' 
    />

#### newslatter component accept title,class,id ete and also nested children news
newslatter paramater class,id,style etc can accept and apply to the main wrapper div
        
        {{-- example 1 --}}
        <x-newslatter title="You are in on...">
            <x-news 
                headline="News headline "
                sub_text="news sub title"
                link_text="put link button text"
                link="put news links"
            />
            more new component or other element can use as well            
        </x-newslatter>

        {{-- example 2 --}}
        <x-newslatter title="You are LEFT OUT of...">
           <x-news 
                headline="News headline "
                sub_text="news sub title"
                link_text="put link button text"
                link="put news links"
            />
            more....
        </x-newslatter>
        
#### news compooents is create to present the new headline details
 **x-new** paramater: class,id,style etc can accept and apply to news item wrapper div
    <x-news 
        headline="News headline "
        sub_text="news sub title"
        link_text="put link button text"
        link="put news links"
    />


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

So for example, on page https://forbooking.co.uk/v7/user.php


# Example attaches
##### Newslatter
![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/secured-attachments/messaging_message/attachment/bec4920c76c2ad9ce259bad6c9681df9-1724588626338/image2.png?__cld_token__=exp=1724802490~hmac=43bb7549c31bce083cc092fe4eb99da5b62f33912a88c946536e64c7f539386d)

# User details

![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/secured-attachments/messaging_message/attachment/4b1a05869c55418877c97a9d990b9ef8-1724588626352/image1.png?__cld_token__=exp=1724802490~hmac=9b24044c7afd0a273e4da426e8d7eaf01bbd9cda9f00a81165b17899f816656f)

# Sado