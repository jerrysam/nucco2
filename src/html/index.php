{% extends 'layouts/application.html' %}

{% block content %}
  {% set topsection = { title: "<span>For stories that make seeing believing</span>" } %}
  {% include "partials/topsection.html" %}



  {% set theme = { bg: 'light' } %}
  {% set basicsection = {   icon:         "nb_brain_logo",

                            title:        "We'll make sure you're heard",

                            firstpara:    "It's a reality of the time we live in that some of the things that have to be said are a little\, well... boring\, compared to those sensationalist headlines. But we know how much you need to hit the mark.",

                            secondpara:   "That's why we've spent years in the Nucco Brain studio honing the craft of working a professional message - however ordinary - into a visual narrative that's worth following and passing along. We blend the old world and the new. The ancient tradition of storytelling and a youthful curiosity for diving headfirst into the latest technologies in content production\, animation\, VR and AR to design visual experiences that capture the attention of an increasingly distracted audience. And that's why our clients stick around."
                         }
  %}
  {% include "partials/basicsection.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = { title: 'Adapting the story',
                                subtitle: 'Innovate UK / Future predictions',
                                button: 'See more',
                                bg: 'images/breaker1.jpg',
                                popupid: '777'
                             }
  %}
  {% include "partials/horizontalsection.html" %}

  
  {% set theme = { bg: 'dark' } %}
  {% include "partials/threecolsection.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = { title: 'Challenging the status quo',
                                subtitle: 'Deloitte / Vat',
                                button: 'See more',
                                bg: 'images/breaker2.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}



  {% set theme = { bg: 'light' } %}
  {% set basicsection = {   icon:         "home_hand_heart",

                            firstpara:    "Big businesses don't tend to prioritise corporate communications in the same way they do marketing. At least\, not until the shit hits the fan. It's always been the least sexy side of the comms function - the rest of the business doesn't really get what you do\, your budget flows down the drain on last-minute campaigns you simply don't have the resource to deliver effectively\, and all those crucial messages you have to deliver go unnoticed.",

                            secondpara:   "We’re here to change that\, with stories so good your critics will not only hear you but start sharing your message themselves.",

                            button: "Make them stop & listen"
                         }
  %}
  {% include "partials/basicsection.html" %}



  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = { title: 'Hitting the mark',
                                subtitle: 'John Lewis Partnership / Pension Scheme',
                                button: 'See more',
                                bg: 'images/breaker3.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set basicsection = {   icon:         "target_arrow",

                            firstpara:    "We want you to see Nucco Brain as a visual storytelling partner, with you for the long-haul. So when we work together, we'll develop communications strategies and campaigns built on a deep understanding of your business goals, the landscape, and what makes your people tick. That's how our stories create long-lasting behavioural change, without blowing the budget. It's how we get content to stretch beyond its reach, beyond the confines of standard technology.",

                            italiccenter_parabottom: "And it's how - when you need to be sure they'll listen\, we'll make sure you're heard."
                         }
  %}
  {% include "partials/basicsection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set horizontalsection = { title: 'Our craft, your story',
                                subtitle: 'World animal protection / Animals are wildlife. Not entertainers',
                                button: 'See more',
                                bg: 'images/breaker4.jpg'
                             }
  %}
  {% include "partials/horizontalsection.html" %}



  {% set partnerlogos = {
                          subtitle: 'A sentence or two to go here talking about the clients we work with. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismodt.',
                          imgurl: 'images/client_logos.png'
                         }
  %}
  {% include "partials/partnerlogos.html" %}


  {% include "shared/awards.html" %}

  {% include "shared/contact.html" %}

{% endblock %}
