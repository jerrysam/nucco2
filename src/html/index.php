{% extends 'layouts/application.html' %}

{% set title = " Studio" %}
{% block head %}
  <meta name="description" content="Nucco Brain is a visual storytelling studio based in London. We specialise in crafting professional messages into visual narratives worth following and passing along. We blend the ancient tradition of storytelling with the latest technologies in content production, video, animation, VR and AR to design unique visual experiences for brands and corporations.">
{% endblock %}

{% block content %}
  {% set topsection = {     
                        title:        "<span>Our craft, your stories</span>",
  
                        video: "main-reel"
                      }
  %}
  
  {% include "partials/topsection.html" %}



  {% set theme = { bg: 'light' } %}
  {% set basicsection = {
      staticicon:         "nb_brain_logo",

      title:        "We\'ll make sure you\'re heard",

      firstpara:    "It\'s a reality of the time we live in that some of the things that have to be said are a little flat\, compared to those sensationalist headlines. But we know how much you need to hit the mark.",

      secondpara:   "That\'s why we\'ve spent years in the Nucco Brain studio mastering the craft of working a professional message \- however ordinary \- into a visual narrative that\'s worth following and passing along.",

      thirdpara:   "We blend the old world and the new: the ancient tradition of storytelling and a youthful curiosity for diving headfirst into the latest technologies in content production\, animation\, VR and AR. We design visual experiences that capture the attention of an increasingly distracted audience. And that\'s why our clients stick around."
      
}
  %}
  {% include "partials/basicsection.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {     
                            title:        'Adapting the story',
                            
                            subtitle:     'Innovate UK / Future predictions',
                            
                            button:       'See more',
                            
                            bg:           'images/breaker1.jpg',
                            
                            popupid:      '37408001'
                         }
  %}
  {% include "partials/breakersection.html" %}

  
  {% set theme = { bg: 'dark' } %}
  {% include "partials/threecolsection.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {     
                            title:    'Challenging the status quo',

                            subtitle: 'Deloitte / Vat',

                            button:   'See more',
                            
                            bg:       'images/breaker2.jpg',

                            popupid:  '51018983'
                          }
%}
  {% include "partials/breakersection.html" %}



  {% set theme = { bg: 'light' } %}
  {% set basicsection = {   icon:         "home_hand_heart",

                            firstpara:    "Most businesses don’t prioritise corporate communications in the same way they do direct marketing. At least, not until there’s no other choice. That's a huge missed opportunity for capturing a loyal audience. With such a reactive approach, budgets flow down the drain on last\-minute campaigns you simply don't have the resource to deliver effectively. 
                            All those crucial messages that need to be heard will keep going unnoticed. ",

                            secondpara:   "There's a better way to do it. Changing the dialogue with stories so good your critics will not only hear you, but start sharing your message themselves.",

                            button: "Make them stop & listen"
                         }
  %}
  {% include "partials/basicsection.html" %}



  {% set theme = { bg: 'dark' } %}
  {% set breakersection = { title: 'Hitting the mark',
                            
                            subtitle: 'John Lewis Partnership / Pension Scheme',
                            
                            button: 'See more',
                            
                            bg: 'images/breaker3.jpg',

                            popupid:      '33791522'
                          }
  %}
  {% include "partials/breakersection.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set basicsection = {   icon:         "home_target",

                            firstpara:    "If you choose us as your visual storytelling partner, we’ll stay with you for the long-haul. So, when we work together, we'll develop strategies built on a deep understanding of your business goals and what makes your people tick. That's how our stories create long-lasting behavioural change, without blowing the budget. It’s how a message spreads.",

                            italiccenter_parabottom: "And it's how - when you need to be sure they'll listen - we'll make sure you're heard."
                         }
  %}
  {% include "partials/basicsection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set breakersection = { title:    'Our craft, your stories',
                            
                            subtitle: 'World animal protection / Animals are wildlife. Not entertainers',
                            
                            button:   'See more',
                            
                            bg:       'images/breaker4.jpg',

                            popupid:  '30208817'
                          }
  %}
  {% include "partials/breakersection.html" %}



  {% set partnerlogos = {
                          imgurl: 'images/home_clientlogos.png'
                         }
  %}
  {% include "partials/partnerlogos.html" %}

  {% set awards = {
                              subtitle: 'At First Sight',
                              
                              button:   'See more',

                              popupid:  '29509945'
                            }
    %}
  {% include "shared/awards.html" %}

  {% include "shared/contact.html" %}

{% endblock %}
