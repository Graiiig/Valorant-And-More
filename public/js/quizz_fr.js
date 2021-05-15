// QUESTIONS

const questions = [

     {
        "question":"Je suis : ",
        "answer1": "Un Homme.",
        "answer1Total": "1",
        "answer2": "Une Femme.",
        "answer2Total": "1",
        "answer3": "Les deux.",
        "answer3Total": "2",
        "answer4": "C'est bien plus compliqué, je ne me sens pas à l'aise dans cette société qui définit des genres.",
        "answer4Total": "2",
      },
      {
          "question": "Le temps d'achat de Valorant :",
          "answer1": "Est beaucoup trop long, je me retrouve à courir contre les murs de protection.",
          "answer1Total": "4",
          "answer2": "Je n'ai jamais joué à Valorant.",
          "answer2Total": "1",
          "answer3": "J'ai des crédits en trop, quelqu'un veut une arme ?",
          "answer3Total": "3",
          "answer4": "Le kevlar c'est vraiment important ?",
          "answer4Total": "2",
        },
      {
        "question": "On a tous une petite préférence :",
        "answer1": "Je préfère la discrétion. La nuit je m'entraîne à marcher sur la pointe des pieds.",
        "answer1Total": "2",
        "answer2": "J'aime les explosions, trop pour que ce soit normal.",
        "answer2Total": "3",
        "answer3": "L'odeur de l'essence me plait énormément.",
        "answer3Total": "4",
        "answer4": "J'adore les arts martiaux. Mais uniquement le judo. Que j'ai pratiqué. Deux semaines.",
        "answer4Total": "1",
      },
      {
        "question": "Mon allié à un micro plutôt mauvais :",
        "answer1": "*Rendre muet*",
        "answer1Total": "2",
        "answer2": "Je le laisse parler, pour avoir les informations.",
        "answer2Total": "3",
        "answer3": "J'aime tous mes alliés, quelle que soit la qualité du micro.",
        "answer3Total": "1",
        "answer4": "Je l'insulte copieusement, afin de bien me sentir dans ma peau.",
        "answer4Total": "0",
      },
      {
        "question": "Dans la vie :",
        "answer1": "Je me sculpte un corps parfait pour plaire à la personne que j'aime.",
        "answer1Total": "4",
        "answer2": "Une bière, en bouteille ou en gobelet, une pizza fraichement livrée, et me voilà comblé(e).",
        "answer2Total": "3",
        "answer3": "Encore une soirée au bar, à dépenser tout l'argent que je n'ai pas.",
        "answer3Total": "2",
        "answer4": "Je ne bois pas d'alcool, en revanche j'ai mon brevet de secourisme.",
        "answer4Total": "1",
      },
      {
        "question": "Un dimanche à la maison :",
        "answer1": "Lecture et canapé, rien ne vaut l'odeur d'un vieux bouquin.",
        "answer1Total": "1",
        "answer2": "Je danse dans mon salon, Vivaldi aux platines.",
        "answer2Total": "2",
        "answer3": "Où sont mes haltères ?",
        "answer3Total": "4",
        "answer4": "Je m'entraîne pour MasterChef. Gordon Ramsay n'a qu'à bien se tenir !",
        "answer4Total": "3",
      },
      {
        "question": "Ce que j'aime le plus dans Valorant : ",
        "answer1": "Définitivement les bonnes grosses têtes.",
        "answer1Total": "4",
        "answer2": "Gagner le round, et le match ensuite.",
        "answer2Total": "3",
        "answer3": "Planter le spike, ça fait un bruit sympa.",
        "answer3Total": "2",
        "answer4": "Le mode spectateur. Je suis pacifiste.",
        "answer4Total": "1",
      },
      {
        "question": "Les jeux de société :",
        "answer1": "Le monopoly traine trop souvent en longueur.",
        "answer1Total": "4",
        "answer2": "Le puissance 4. Le poche, le classique, le géant, indémodable.",
        "answer2Total": "2",
        "answer3": "Le cluedo. Colonel Moutarde, tu ne m'as jamais déçu.",
        "answer3Total": "3",
        "answer4": "Le twister. Mon dos en garde un mauvais souvenir, mon cerveau pas du tout.",
        "answer4Total": "1",
      },
      {
        "question": "Mes alliés partent poser le spike en A :",
        "answer1": "J'y vais avec eux, si l'un tombe, je le vengerai.",
        "answer1Total": "3",
        "answer2": "J'y vais en premier, l'entry frag est pour moi !",
        "answer2Total": "4",
        "answer3": "Je les laisse prendre le site, je poserai plus tard.",
        "answer3Total": "1",
        "answer4": "Silencieux, je préfère surprendre les ennemis qui partent de B.",
        "answer4Total": "2",
      },
      {
        "question": "Pour mon Curriculum Vitae :",
        "answer1": "Je n'ai pas peur de prendre des risques.",
        "answer1Total": "3",
        "answer2": "J'aime le travail en équipe.",
        "answer2Total": "2",
        "answer3": "J'adore les défis, aucun n'est insurmontable.",
        "answer3Total": "4",
        "answer4": "La santé de mes proches est très importante pour moi.",
        "answer4Total": "1",
      },
      {
        "question": "Pour devenir un(e) meilleur(e) joueur(euse) : ",
        "answer1": "J'ai besoin d'une chaise dite 'gaming', et tout l'attirail qui s'en suit.",
        "answer1Total": "2",
        "answer2": "J'ai besoin de beaucoup m'entrainer. Beaucoup.",
        "answer2Total": "3",
        "answer3": "J'ai besoin d'un minimum de débit internet et d'images par seconde.",
        "answer3Total": "1",
        "answer4": "Je peux combiner les trois réponses précédentes ? ",
        "answer4Total": "4",
      },
      {
        "question": "Mon genre cinématographique préféré :",
        "answer1": "Le péplum. Mythologie, et Antiquité, un mélange savoureux.",
        "answer1Total": "2",
        "answer2": "Le film policier. Étre un bon flic, c'est une question d'éthique.",
        "answer2Total": "1",
        "answer3": "La science-fiction. La réalité je la vois tous les jours par ma fenêtre, on a le droit de rêver.",
        "answer3Total": "3",
        "answer4": "Le film d'action. Droite ! Gauche ! J'y ai laissé mes tympans, mais ça en valait la peine.",
        "answer4Total": "4",
      },
      {
        "question": "En 2 vs 1, ton allié(e) lance : 'dernier sur site A' :",
        "answer1": "Je pars en duel , un contre un cowboy, tu es de trop dans cette ville.",
        "answer1Total": "4",
        "answer2": "J'attends mon copain et on le crossfire comme il faut.",
        "answer2Total": "2",
        "answer3": "J'en profite pour manger les chips qui trainent sur mon bureau.",
        "answer3Total": "2",
        "answer4": "J'attends de le voir sur la carte, il va forcément faire du bruit.",
        "answer4Total": "1",
      },
      {
        "question": "Dans matrix,",
        "answer1": "Je prends la pilule bleue.",
        "answer1Total": "2",
        "answer2": "Je prends la pilule rouge.",
        "answer2Total": "4",
        "answer3": "Je ne sortirai jamais de cette chambre.",
        "answer3Total": "1",
        "answer4": "Pratique de se déplacer aussi facilement dans le monde.",
        "answer4Total": "3",
      },
      {
        "question": "On a tous un avis : ",
        "answer1": "La téléportation est un concept à la con.",
        "answer1Total": "3",
        "answer2": "Un mur c'est moins bien si il est troué.",
        "answer2Total": "2",
        "answer3": "Espionner c'est bien, tuer c'est mieux.",
        "answer3Total": "4",
        "answer4": "Je crois que j'aime toujours mon ex.",
        "answer4Total": "1",
      },
      {
        "question": "Il va falloir faire un choix :",
        "answer1": "Team Seigneur des Anneaux.",
        "answer1Total": "3",
        "answer2": "Team Vikings.",
        "answer2Total": "4",
        "answer3": "Team Game of Thrones.",
        "answer3Total": "2",
        "answer4": "Team Grey's anatomy.",
        "answer4Total": "1",
      },
      {
        "question": "Mes passe-temps :",
        "answer1": "Je suis un adorateur du feu. Je peux passer des heures devant une cheminée.",
        "answer1Total": "3",
        "answer2": "J'ai passé mes meilleurs moments à la patinoire.",
        "answer2Total": "1",
        "answer3": "Le slime à un côté addictif. La texture peut-être ?",
        "answer3Total": "2",
        "answer4": "Je suis un forgeron né ! J'aime battre le fer tant qu'il est chaud.",
        "answer4Total": "4",
      },
      {
        "question": "Petites activités du quotidien : ",
        "answer1": "Plutôt barbecue entre copains.",
        "answer1Total": "3",
        "answer2": "Plutôt cours d'escrime.",
        "answer2Total": "4",
        "answer3": "Plutôt essayer de confectionner des fumigènes maison. (Mauvaise idée)",
        "answer3Total": "2",
        "answer4": "Plutôt jouer avec des pétards toute ma vie.",
        "answer4Total": "1",
      },
      {
        "question": "Pendant une partie : ",
        "answer1": "Je joue avec de la musique, c'est plus motivant.",
        "answer1Total": "2",
        "answer2": "J'augmente juste le son du jeu, pour bien entendre les pas.",
        "answer2Total": "3",
        "answer3": "Je lance des blagues sur Discord, je regarde une vidéo, je fais mes lacets, je suis polychrone.",
        "answer3Total": "1",
        "answer4": "Je m'entraîne tout du long, chaque instant me rend meilleur.",
        "answer4Total": "4",
      },
      {
        "question": "Mes préférences culinaires :",
        "answer1": "Feijoada, Caipirinha, voilà un petit-déjeuner complet pour bien commencer la journée !",
        "answer1Total": "3",
        "answer2": "Pierojki, Vodka, j'aurai toujours un peu de place pour vous !",
        "answer2Total": "2",
        "answer3": "Fish and chips, Thé, long live the Queen !",
        "answer3Total": "2",
        "answer4": "Kimchi, Soju, et toujours à perdre le nord !",
        "answer4Total": "4",
      },
      


  ]

  
  let currentQuestion = 0;
  let score = [];
  let selectedAnswersData = [];
  const totalQuestions =questions.length;
  
  const title = document.querySelector('.quizz_title');
  const container = document.querySelector('.quiz-container');
  const questionEl = document.querySelector('.question');
  const option1 = document.querySelector('.option1');
  const option2 = document.querySelector('.option2');
  const option3 = document.querySelector('.option3');
  const option4 = document.querySelector('.option4');
  const nextButton = document.querySelector('.next');
  const previousButton = document.querySelector('.previous');
  const restartButton = document.querySelector('.restart');
  const result = document.querySelector('.result');
  

  //Function to generate question 
  function generateQuestions (index) {
      //Select each question by passing it a particular index
      const question = questions[index];
      const option1Total = questions[index].answer1Total;
      const option2Total = questions[index].answer2Total;
      const option3Total = questions[index].answer3Total;
      const option4Total = questions[index].answer4Total;

      //Populate html elements 
      questionEl.innerHTML = `${index + 1}/${totalQuestions} - ${question.question}`
      option1.setAttribute('data-total', `${option1Total}`);
      option2.setAttribute('data-total', `${option2Total}`);
      option3.setAttribute('data-total', `${option3Total}`);
      option4.setAttribute('data-total', `${option4Total}`);
      option1.innerHTML = `${question.answer1}`
      option2.innerHTML = `${question.answer2}`
      option3.innerHTML = `${question.answer3}`
      option4.innerHTML = `${question.answer4}`
  }
  

  function loadNextQuestion () {
      const selectedOption = document.querySelector('input[type="radio"]:checked');
      //Check if there is a radio input checked
      if(!selectedOption) {
          alert('Please select your answer!');
          return;
      }

      //Get value of selected radio
      const answerScore = Number(selectedOption.nextElementSibling.getAttribute('data-total'));
  
      ////Add the answer score to the score array
      score.push(answerScore);
  
      selectedAnswersData.push()

      //Finally we incement the current question number ( to be used as the index for each array)

      currentQuestion++;
  
      const totalScore = score.reduce((total, currentNum) => total + currentNum);
      
       //once finished clear checked
       selectedOption.checked = false;
      //If quiz is on the final question

      if(currentQuestion == totalQuestions - 1) {
        nextButton.textContent = 'RESULT';
    }
      
      //If the quiz is finished then we hide the questions container and show the results 
      if(currentQuestion == totalQuestions) {
        container.style.display = 'none';
        title.style.display = 'none';
        document.querySelector('.japanesetree_quizz').style.display = 'none';
        document.querySelector('.sprinkles_quizz').style.display = 'none';
        document.querySelector('.copyright_quizz').style.textAlign = 'center';
        document.querySelector('.copyright_quizz').style.marginLeft = '0';



  

                var agents = {

                    "Sage" : {
                    "lildesc" :    "Tu te donnes pour tes coéquipiers, et tu es, sans aucun doute un véritable support pour ton équipe.",
                    "pouvoir1" :    "<b>Mur Orbital :</b> Fait apparaître un mur de glace large et solide. Clic droit pour faire pivoter le mur avant de le placer.",
                    "pouvoir2" : "<b>Orbe de ralentissement : </b>Jetez un orbe de radianite qui se brise lors de l'impact avec le sol. Les joueurs coincés dans le champ sont ralentis et font du bruit en se déplaçant.",
                    "pouvoir3" : "<b>Orbe de soin : </b>Soigne tes alliés ou toi-même complètement en quelques secondes.",
                    "ulti" : "<b>Resurrection : </b>Cible le corps d'un allié. Il sera réssucité avec tous ces points de vie."      
                    },
                    "Brimstone" : {
                    "lildesc" :    "Votre arsenal orbital garantit que votre équipe a toujours l'avantage.",
                    "pouvoir1" :    "<b>Incendiaire : </b> Lance une grenade incendiaire qui déploie un champ de tir dommageable. ",
                    "pouvoir2" : "<b> Balise de stimulation: </b> Ciblez un emplacement à proximité pour appeler une balise de stimulation, en donnant à tous les joueurs à proximité Rapidfire.",
                    "pouvoir3" : "<b> Smoke aérienne : </b> Utilisez votre carte pour appeler des écrans de fumée à déploiement orbital qui obscurcissent la vision. Cliquez pour définir les emplacements et confirmez le lancement.",
                    "ulti" : "<b> Frappe orbitale: </b> Utilisez votre carte pour viser un emplacement, en lançant une frappe orbitale dévastatrice qui pulsera pour des dégâts importants sur plusieurs secondes."
                    },
                    "Cypher" : {
                    "lildesc" :    "La CIA est une agence de renseignement plutôt avancée. Vous devriez penser à les rejoindre!",
                    "pouvoir1" :    "<b> Trapwire: </b> Placez un tripwire furtif entre deux murs. Les ennemis déclencheurs sont restreints et révélés pendant une courte période.",
                    "pouvoir2" : "<b> Cage de Cypher: </b> Lancez un piège d'activation à distance. Réactivez pour créer une cage qui ralentit les ennemis qui la traversent.",
                    "pouvoir3" : "<b> Caméra espion: </b> Placez une caméra distante. Après le placement, réactivez-le pour afficher le flux vidéo. Faites un clic gauche à huis clos pour tirer une fléchette de suivi. Se recharge lorsqu'il est ramassé ou tué.",
                    "ulti" : "<b> Vol de neurones: </b> Extraire des informations du cadavre d'un ennemi, révélant l'emplacement de leurs alliés vivants."  
                    },
                    "Omen" : {
                    "lildesc" :    "Sombre et sombre comme la rose noire, la magie des ténèbres vous entoure.",
                    "pouvoir1" :    "<b> Paranoïa: </b> Envoyez une ombre éthérée en ligne droite, myope toute personne qu'elle touche.",
                    "pouvoir2" : "<b> Marche des ombres: </b> Après un certain temps, dématérialisez et téléportez sur une courte distance.",
                    "pouvoir3" : "<b> Couverture sombre: </b> jetez un orbe éthéré furtif qui éclate dans une sphère d'ombre obscurcissante à son emplacement final. Peut être facturé pour augmenter la distance.",
                    "ulti" : "<b> Dans les ombres: </b> Sélectionnez n'importe où sur la carte pour vous téléporter et vous réformer. Lorsque vous arrivez, apparaissez sous forme d'ombre, qui retournera à votre emplacement d'origine s'il est tué. Une fois la téléportation terminée, devenez Incorporeal pendant une courte période."
                    
                    },
                    "Sova" : {
                    "lildesc" :    "De tous les archers, peu sont ceux qui maîtrisent les arcs, la technologie et les armes à feu.",
                    "pouvoir1" :    "<b> Choc électrique : </b> Tire un boulon explosif qui émet une impulsion d'énergie statique dommageable lors de l'impact.",
                    "pouvoir2" : "<b> Drone hibou: </b> Déployez un drone pilotable qui peut tirer une fléchette qui révélera les ennemis touchés.",
                    "pouvoir3" : "<b> Flêches de reconnaissance : </b> Tire un boulon qui déploie un émetteur sonar. Les pings du sonar marquent les ennemis proches, les faisant apparaître. Peut être détruit.",
                    "ulti" : "<b> Fureur du chasseur: </b> déclenche jusqu'à trois explosions d'énergie mortelles qui traversent la carte. Chaque ennemi touché subit de lourds dégâts et est marqué."
                    },
                    "Viper" : {
                    "lildesc" :    "Petite créature vicieuse, votre poison envahit tant que votre cœur est suffisamment toxique.",
                    "pouvoir1" :    "<b> Morsure de serpent: </b> Tire un projectile qui explose dans une mare d'acide dommageable.",
                    "pouvoir2" : "<b> Nuage de poison: </b> Lancez un émetteur de gaz que vous pouvez réactiver pour créer un nuage de fumée toxique au prix du carburant. L'émetteur peut être ramassé et jeté à nouveau après un court temps de recharge.",
                    "pouvoir3" : "<b> Écran toxique: </b> déployez une longue ligne d'émetteurs de gaz que vous pouvez réactiver pour créer une grande paroi de gaz toxique au prix du carburant.",
                    "ulti" : "<b> Viper’s Pit: </b> Équipez un pulvérisateur de produits chimiques. Tirez pour vaporiser un nuage chimique dans toutes les directions autour de Viper, créant un grand nuage qui réduit la portée de vision et la santé maximale des joueurs à l'intérieur."
                    },
                    "Breach" : {
                    "lildesc" :    "Métaux lourds, tremblements de terre, chacune de vos étapes fait trembler le sol.",
                    "pouvoir1" :    "<b> Réplique: </b> Équipez une charge de fusion. Lancez la charge pour définir une rafale à activation lente à travers un mur. Le buste fait de gros dégâts à toute personne prise dans la région.",
                    "pouvoir2" : "<b> Point d'éclair: </b> Équipez-vous d'une charge aveuglante. Lancez la charge pour déclencher une rafale à action rapide à travers un mur. La charge explose pour aveugler tous les joueurs qui la regardent.",
                    "pouvoir3" : "<b> Lignes de faille: </b> Équipez-vous d'une explosion sismique. Maintenez le feu pour augmenter la distance. Relâchez pour déclencher le tremblement de terre, étourdissant tous les joueurs de sa zone en ligne jusqu'à la zone.",
                    "ulti" : "<b> Tonnerre assourdissant :  </b> Équipez-vous d'une charge sismique. Tirez pour envoyer un tremblement de terre en cascade à travers tous les terrains dans un grand cône. Le tremblement de terre étourdit et assomme quiconque y est pris."
                    },
                    "Raze" : {
                    "lildesc" :    "BOOM! Bazookas et explosions régissent votre vie, le silence n'est clairement pas votre point fort.",
                    "pouvoir1" :    "<b> Robot Boom : </b> Équipez un Boom Bot. Le feu déploiera le bot, le faisant voyager en ligne droite sur le sol, rebondissant sur les murs. Le Boom Bot se verrouillera sur tous les ennemis dans son cône frontal et les poursuivra, explosant pour de lourds dégâts s'il les atteint.",
                    "pouvoir2" : "<b> Paquet d'explosifs : </b> lancez instantanément un Blast Pack qui collera aux surfaces. Réutilisez la capacité après le déploiement pour faire exploser, endommager et déplacer tout ce qui a été touché.",
                    "pouvoir3" : "<b> Bombes de peinture : </b> Équipez une grenade à grappes. Tirez pour lancer la grenade, ce qui fait des dégâts et crée des sous-munitions, chacune causant des dégâts à n'importe qui dans sa portée.",
                    "ulti" : "<b> Arrêt imminent : </b> Équipez un lance-roquettes. Le feu tire une fusée qui inflige des dégâts massifs au contact de quoi que ce soit."
                    },
                    "Phoenix" : {
                    "lildesc" :  "Adorateur du feu, tu adores être sous les projecteurs !",
                    "pouvoir1" : "<b> Mains brulantes : </b> Lance des boules de feu qui explosent après un léger retard ou lors d'un impact avec le décor.",
                    "pouvoir2" : "<b> Flamme :  </b> Jette un mur de feu qui obstrue la vision des ennemis et inflige des dégâts à toute personne qui passe.",
                    "pouvoir3" : "<b> Balle courbe : </b>  Lance une éruption incurvée qui explose comme une grenade flash après un court délai, aveuglant temporairement tous ceux qui la regardent.",
                    "ulti" : "<b>  Retour en arrière : </b> Marque une position. Si vous mourez pendant la durée de cette capacité, ou après son expiration, vous renaîtrez là où vous l'avez marqué, en pleine santé."
                    },
                    "Jett" : {
                    "lildesc" :    "Ninja et style soigné, vous êtes sans aucun doute le plus polyvalent des assassins au monde. Heureusement pour vous, le quiz est anonyme.",
                    "pouvoir1" :    "<b> Smoke : </b> Jetez un nuage de brouillard qui obscurcit la vision lors de l'impact. Maintenez enfoncé le bouton de capacité pour plier la trajectoire en vol du nuage.",
                    "pouvoir2" : "<b> Plus haut : </b> Après une brève remontée, propulsez-vous vers le haut.",
                    "pouvoir3" : "<b> Vent arrière : </b> Courez immédiatement sur une courte distance dans la direction dans laquelle vous vous déplacez.",
                    "ulti" : "<b> Tempête de lames : </b> Armez-vous de plusieurs couteaux de lancer mortels qui infligent des dégâts modérés et tuent les tirs à la tête. Marquer un kill restaure tous les poignards. Le clic gauche lance une seule dague. Le clic droit lance tous les poignards restants dans une rafale à courte portée."
                    },
                }

                 //    givinig score to agents

           if (totalScore <= 30) {var agent = ('Brimstone'); ;}
           if (totalScore > 30 && totalScore <= 32) {var agent = ('Sage'); ;}
           if (totalScore > 32 && totalScore <= 34) {var agent = ('Cypher'); ;}
           if (totalScore > 34 && totalScore <= 36) {var agent = ('Sage'); ;}
           if (totalScore > 36 && totalScore <= 38) {var agent = ('Cypher'); ;}
           if (totalScore > 38 && totalScore <= 40) {var agent = ('Sage'); ;}
           if (totalScore > 40 && totalScore <= 42) {var agent = ('Omen'); ;}
           if (totalScore > 42 && totalScore <= 44) {var agent = ('Viper'); ;}
           if (totalScore > 44 && totalScore <= 46) {var agent = ('Sova'); ;}
           if (totalScore > 46 && totalScore <= 48) {var agent = ('Omen'); ;}
           if (totalScore > 48 && totalScore <= 50) {var agent = ('Sage'); ;}
           if (totalScore > 50 && totalScore <= 52) {var agent = ('Sova'); ;}
           if (totalScore > 52 && totalScore <= 54) {var agent = ('Breach'); ;}
           if (totalScore > 54 && totalScore <= 56) {var agent = ('Raze'); ;}
           if (totalScore > 56 && totalScore <= 58) {var agent = ('Breach'); ;}
           if (totalScore > 58 && totalScore <= 60) {var agent = ('Raze'); ;}
           if (totalScore > 60 && totalScore <= 62) {var agent = ('Viper'); ;}
           if (totalScore > 62 && totalScore <= 64) {var agent = ('Phoenix'); ;}
           if (totalScore > 64 && totalScore <= 66) {var agent = ('Raze'); ;}
           if (totalScore > 66 && totalScore <= 68) {var agent = ('Phoenix'); ;}
           if (totalScore > 68) {var agent = ('Jett'); ;}

            result.innerHTML = 
           `
           <div class="summary">
              <div class="agentrevealtxt">${agent}</div>
              </br>
              <span class="agentlildesc">${agents[agent].lildesc}</span>
              </br>
              <span class="agentlildesc">Toi et ${agent} êtes fait l'un pour l'autre !</span>                   

                <div class="description">
                    <div class="abilitie"><img src="../../images/${agent}/${agent}1100x100.png" class="agentabilitiespng" ><span class="agentabilitiestxt">${agents[agent].pouvoir1}</span></div>
                    <div class="abilitie"><img src="../../images/${agent}/${agent}2100x100.png" class="agentabilitiespng" ><span class="agentabilitiestxt">${agents[agent].pouvoir2}</span></div>
                    <div class="abilitie"><img src="../../images/${agent}/${agent}3100x100.png" class="agentabilitiespng" ><span class="agentabilitiestxt">${agents[agent].pouvoir3}</span></div>
                    <div class="abilitie"><img src="../../images/${agent}/${agent}ulti100x100.png" class="agentabilitiespng" ><span class="agentabilitiestxt">${agents[agent].ulti}</span></div>
                </div>

                <div class="descriptionmobile">
                    <div class="abilitiesmobile">
                        <img onclick="changeagentabilitiesmobile(this.id)" id='P1' src="../../images/${agent}/${agent}1100x100.png" class="agentabilitiespngmobile select" >
                        <img onclick="changeagentabilitiesmobile(this.id)" id='P2' src="../../images/${agent}/${agent}2100x100.png" class="agentabilitiespngmobile" >
                        <img onclick="changeagentabilitiesmobile(this.id)" id='P3' src="../../images/${agent}/${agent}3100x100.png" class="agentabilitiespngmobile" >
                        <img onclick="changeagentabilitiesmobile(this.id)" id='UL' src="../../images/${agent}/${agent}ulti100x100.png" class="agentabilitiespngmobile" >
                    </div>
                        </br>
                    <div class="agentabilitiestxtmobile">
                        <span class="agentabilitiessolotxtmobile P1 selected">${agents[agent].pouvoir1}</span>
                        <span class="agentabilitiessolotxtmobile P2">${agents[agent].pouvoir2}</span>
                        <span class="agentabilitiessolotxtmobile P3">${agents[agent].pouvoir3}</span>
                        <span class="agentabilitiessolotxtmobile UL">${agents[agent].ulti}</span>
                    </div>
                </div>
                
              <button class="restart">Rejouer</button>    
               
<!--              <div class="loginasagent" title="Tu peux changer d'agent en te connectant."><a class="aloginasagent" href="#">Se connecter avec ${agent} !</a></div>-->

          </div>   
          
          <img src="../../images/${agent}/${agent}display.png" class="agent" alt="${agent}">`

            return;  
            
            

      }
      generateQuestions(currentQuestion);
  }
  
  //Function to load previous question
  function loadPreviousQuestion() {
      //Decrement quentions index
      currentQuestion--;
      //remove last array value;
      score.pop();
      //Generate the question
      generateQuestions(currentQuestion);
  }
  
  //Fuction to reset and restart the quiz;
  function restartQuiz(e) {
      if(e.target.matches('button')) {
      //reset array index and score
      currentQuestion = 0;
      score = [];
      //Reload quiz to the start
      location.reload();
      }
  
  }
  
  
  generateQuestions(currentQuestion);

  nextButton.addEventListener('click', loadNextQuestion);

  previousButton.addEventListener('click',loadPreviousQuestion);
  result.addEventListener('click',restartQuiz);

  function changeagentabilitiesmobile(id){

    if($('.agentabilitiessolotxtmobile').hasClass("selected")){

  $('.agentabilitiessolotxtmobile').removeClass("selected")
  $('.'+id).addClass('selected');
  $("#"+id).addClass('select');
  $("img:not(#"+id+")").removeClass("select")
  
}
}