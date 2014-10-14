<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Fri, 27 Jun 2014 21:02:23 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title></title>

    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style>
    li
    { 
      position:  absolute;
      left: 0;
      top: 0; /* set these so Chrome doesn't return 'auto' from getComputedStyle */
      width: 200px; 
      background: rgba(255,255,255,0.66); 
      border: 2px  solid rgba(0,0,0,0.5); 
      border-radius: 4px; padding: 8px;
    }
    </style>
    <script>

    function drag_start(event) 
    {
    var style = window.getComputedStyle(event.target, null);
    var str = (parseInt(style.getPropertyValue("left")) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top")) - event.clientY)+ ',' + event.target.id;
    event.dataTransfer.setData("Text",str);
    } 

    function drop(event) 
    {
    var offset = event.dataTransfer.getData("Text").split(',');
    var dm = document.getElementById(offset[2]);
    dm.style.left = (event.clientX + parseInt(offset[0],10)) + 'px';
    dm.style.top = (event.clientY + parseInt(offset[1],10)) + 'px';
    event.preventDefault();
    return false;
    }

    function drag_over(event)
    {
    event.preventDefault();
    return false;
    }   
    </script>
  </head>
  <body ondragover="drag_over(event)" ondrop="drop(event)">
   <ul>
          <li id="txt1" draggable="true" ondragstart="drag_start(event)"> Drag this text </li><br>
          <li id="txt2" draggable="true" ondragstart="drag_start(event)"> Drag me</li>
  </ul>
       <p>I never am really satisfied that I understand anything; because, understand it well as I may, my comprehension can only be an infinitesimal fraction of all I want to understand about the many connections and relations which occur to me, how the matter in question was first thought of or arrived at, etc., etc.</p>
       <p>In almost every computation a great variety of arrangements for the succession of the processes is possible, and various considerations must influence the selections amongst them for the purposes of a calculating engine. One essential object is to choose that arrangement which shall tend to reduce to a minimum the time necessary for completing the calculation.</p>
       <p>Many persons who are not conversant with mathematical studies imagine that because the business of [Babbage’s Analytical Engine] is to give its results in numerical notation, the nature of its processes must consequently be arithmetical and numerical, rather than algebraical and analytical. This is an error. The engine can arrange and combine its numerical quantities exactly as if they were letters or any other general symbols; and in fact it might bring out its results in algebraical notation, were provisions made accordingly.</p>
       <p>The Analytical Engine has no pretensions whatever to originate anything. It can do whatever we know how to order it to perform. It can follow analysis, but it has no power of anticipating any analytical revelations or truths. Its province is to assist us in making available what we are already acquainted with.</p>

  </body>
 </html>