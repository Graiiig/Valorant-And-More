
  $('.friend').click(function(){
    $("#messages").empty();
    $("#messages").prepend("<p>You are chatting with :"+$(this).attr("data-username") +" </p>");
    $("#receiver").attr("value",$(this).attr("data-username"))
  })
 
  $('#envoi').click(function(e){
    var sender = encodeURIComponent( $('#sender').val() ); // on sécurise les données
    var receiver = encodeURIComponent( $('#receiver').val() );
    var id = parseInt($('.messagechat:last-child').attr('id')) + 1;

    var message = encodeURIComponent( $('#message').val() );
    e.preventDefault(); // on empêche le bouton d'envoyer le formulaire

    if(sender != "" && message != ""){ // on vérifie que les variables ne sont pas vides
        $.ajax({
            url : "/scripts/traitements.php", // on donne l'URL du fichier de traitement
            type : "POST", // la requête est de type POST
            data : "sender={{app.user.username}}&receiver=" + receiver+ "&message=" + message // et on envoie nos données
        });

        $('#message').val('');
        $('#messages').append("<p id='"+id+"' class='messagechat'>" + sender + " dit à "+ receiver +" : " + decodeURIComponent(message) + "</p>"); // on ajoute le message dans la zone prévue
        $("#messages").animate({ scrollTop: $('#messages').prop("scrollHeight")}, 1000);
    }

     
});



  function startChat(){
    var id = $('.messagechat:last-child').attr('id');
    var receiver = encodeURIComponent( $('#receiver').val() );

      // on lance une requête AJAX
      $.ajax({
          url : "/scripts/charger.php",
          type : "GET",
          data : 'id=' + id+'&user1={{app.user.username}}&user2=' + receiver,
          success : function(html){
              $('#messages').append(html); // on veut ajouter les nouveaux messages au début du bloc #messages
          }
      });
      setTimeout(function(){
      $("#messages").animate({ scrollTop: $('#messages').prop("scrollHeight")}, 1000);
      },5000)
      
  }

  setInterval( function(){


    var id = $('.messagechat:last-child').attr('id');
    
    var receiver = encodeURIComponent( $('#receiver').val() );

      // on lance une requête AJAX
      $.ajax({
          url : "/scripts/charger.php",
          type : "GET",
          data : 'id=' + id+'&user1={{app.user.username}}&user2=' + receiver,
          success : function(html){
              $('#messages').append(html);
              
          }
      });
      

  }, 5000); // on exécute le chargement toutes les 5 secondes


    