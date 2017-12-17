{% extends 'layouts/application.html' %}

{% set title = " for Constant Engagement" %}
{% block head %}
  <meta name="description" content="Your sidekick in an evolving narrative. We specialise in content strategy, brand identity, and content production to help you develop long-term communications strategies built on a deep understanding of your business goals and what makes your stakeholders tick.">
{% endblock %}

{% block content %}

  <!-- htmlmin:ignore -->
  <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);

      require_once __DIR__ . '/nuccobehance/vendor/autoload.php';
      $client = NuccoBrain\Services::getBehanceClient();
      $projects = $client->getCollectionProjects(168432761);
  ?>
  <!-- htmlmin:ignore -->

  {% set topsection = { 
                        title: "<span>On this page I've done something special</span><span>I've deleted the regex command</span><span>Which might have fixed the spacing bug</span>",
  
                        video: "main-reel"
                      }
  %}
  
  {% include "partials/topsection.html" %}

  <section class="section section_light basicsection">
    <div class="wrapper">
      <h3>Can you check all the pages??</h3>
      <p>
          As far as I can see, there's a string manipulator that is kinda broken: I think it was trying to remove the second "|" and just have one, but it was written wrong. So I deleted it.<br/><br/>
          The thing is, it might have been written to solve some other kind of bug. I don't know, something like making sure there's no trailing spaces, so that nothing breaks on too many lines or something.<br/><br/>
          So I've deleted is, so it should come out exactly the same as Behance. Can you check it and make sure it's working like we'd want it to?
      </p>
    </div>
  </section>

  {% include "partials/worksection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {  type: 'quote',
                                quote: '“Lycamobile and I are 100% satisfied with their work. We value our relationship with Nucco Brain and we have been continuously working with them ever since our first project”',
                                author: '- Parthipan Ragunathan (Global Head of Marketing Strategy PLanning at Lycamobile Group)',
                                bg: 'images/breaker5.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}
  
  {% set theme = { bg: 'dark' } %}
  {% set threeiconbasicsection = {    title: 'Let\'s make it worth repeating',
                                      icon_one: 'engagement_one',
                                      icon_two: 'engagement_two',
                                      icon_three: 'engagement_three',
                                      subtitle_one: 'Content<br/> Strategy',
                                      subtitle_two: 'Brand<br/>Identity',
                                      subtitle_three: 'Content<br/>Production',
                                      firstpara: "Nucco Brain is a visual storytelling studio, with you for the long-haul. We'll work with you to develop long-term communications strategies built on a deep understanding of your business goals and what makes your stakeholders tick. Then we’ll back it up with brand development and content production, leveraging a tailored blend of traditional media and market-leading technologies like VR and 360 video. That's how we get the message to all the right people, without blowing the budget. It's how we’ll break through the monotony of information overload."
                             }
  %}
  {% include "partials/threeiconbasicsection.html" %}

  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {  type: 'quote',
                                quote: '“The insights fed into our content strategy contributed significantly to us reinventing our approach to content; this has massively increased our visibility”',
                                author: '- Pete Wilson (Digital Communications Manager at Innovate UK)',
                                bg: 'images/breaker4.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}


  {% set partnerlogos = {
                          imgurl: 'images/value1_clientlogos.png'
                         }
  %}
  {% include "partials/partnerlogos.html" %}


  {% set theme = { bg: 'dark' } %}
  {% set breakersection = {  type: 'quote',
                                quote: '"Nucco Brain is a fantastic creative team to work with. Their deep understanding of our brand and needs helped us shape our B2B marketing strategy with effective results and great quality of production."',
                                author: '- Lorenzo Rulfo (MD of Book on a Tree)',
                                bg: 'images/breaker6.jpg'
                             }
  %}
  {% include "partials/breakersection.html" %}

  {% include "shared/contact.html" %}

{% endblock %}
