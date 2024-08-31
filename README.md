#  Event page's Components

### Event header 

parameters: title , sub_title, link.
parameters requried: link.
Div attributes support. 

    <x-event-header />

Example 

    <x-event-header 
        title="...."
        sub_title="...."
        link="where to go"
    />


### Event month

parameters: name.
parameters requried: name.
Div attributes support. 

    <x-event-month name="September" />


### Event list

parameters: title, image, description, date, link, waitlist, specialist, for, location.
parameters requried: all ( parameters ).
Div attributes support and apply to list wrapper div. 

Example for place (studio, online, onsite, onlocation) 
    
    <x-event  place="studio" />
    <x-event  place="onsite" />
    <x-event  place="onSite" />
    <x-event  place="onlocation" />
    <x-event  place="online" />

Example with waitlist 
    
    <x-event 
        title="name of the event"
        description="details ..."
        waitlist="yes"
    />

Example without waitlist  (no, false or remove waitlist parameter)
    
    <x-event 
        waitlist="no"
    />

Example with for:

        <x-event 
            for="For teachers (and interested students)."                
        />

Example full details:

    <x-event 
        title="Functional ..."
        description="..."
        specialist="name of specialist" 
        date="Sat 07 Sep" 
        link="#" 
        image="/images/image003.jpg" 
        place="onLocation"
        waitlist="yes"
        for="For teachers (and interested students)."
    />

### Event calendar
parameters: page_link, param.
parameters requried: nothing.
Div attributes support. 

    <x-event-calendar />

Example 

    <x-event-calendar page_link="other-page.com" >

Example param

    <x-event-calendar page_link="other-page.com" param="filter" >

    output: other-page.com?filter=(then date)


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

So for example, on page https://forbooking.co.uk/v7/events.php


# Example attaches
##### Event header
![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/secured-attachments/messaging_message/attachment/0c419fb1ca83d9c1e8997a128015809e-1724955072950/Events-head.png?__cld_token__=exp=1725138300~hmac=4110b09cd99b4dc9bd750ea19b0d1407e844aa7ca0ad386c05e27bc68ab8ea83)

# Event details

![](https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/secured-attachments/messaging_message/attachment/0c419fb1ca83d9c1e8997a128015809e-1724955072967/Event.png?__cld_token__=exp=1725138300~hmac=15b2243940c9af9afe0d38de27a8b69d9fc8dfcd0aef64d7bbea44d086c69b98)