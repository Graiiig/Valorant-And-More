// QUESTIONS

const questions = [

     {
        "question":"I am : ",
        "answer1": "A Man.",
        "answer1Total": "1",
        "answer2": "A Woman.",
        "answer2Total": "1",
        "answer3": "Both.",
        "answer3Total": "2",
        "answer4": "It is much more complicated than that, I am not comfortable in this society which define genders.",
        "answer4Total": "2",
      },
      {
          "question": "The buytime in Valorant :",
          "answer1": "Is tooooo long. Every round I find myself stuck against the protection walls.",
          "answer1Total": "4",
          "answer2": "I have never played Valorant before.",
          "answer2Total": "1",
          "answer3": "I have to much money, does someone wants a weapon ?",
          "answer3Total": "3",
          "answer4": "Does the Kevlar really matter ?",
          "answer4Total": "2",
        },
      {
        "question": "We all have preferences :",
        "answer1": "I like to be sneaky. I train myself during the night to walk tiptoe.",
        "answer1Total": "2",
        "answer2": "I love explosions, too much for it to be normal.",
        "answer2Total": "3",
        "answer3": "I like the smell of gasoline a lot.",
        "answer3Total": "4",
        "answer4": "I love martial arts. But only Judo. That I practiced. Two weeks.",
        "answer4Total": "1",
      },
      {
        "question": "One of my mate has a pretty bad microphone :",
        "answer1": "*Muted*",
        "answer1Total": "2",
        "answer2": "I let him talk, I need infomations.",
        "answer2Total": "3",
        "answer3": "I like all my allies,  no matter how bad their microphone is.",
        "answer3Total": "1",
        "answer4": "I insult him vigorously, to feel good about myself.",
        "answer4Total": "0",
      },
      {
        "question": "In life :",
        "answer1": "I sculpt myself a perfect body to please the person I love.",
        "answer1Total": "4",
        "answer2": "A beer, a freshly delivered pizza, and here I am, fulfilled.",
        "answer2Total": "3",
        "answer3": "Another evening at the bar, spending all the money I don't have.",
        "answer3Total": "2",
        "answer4": "I do not drink alcohol, however I have my first aid certificate.",
        "answer4Total": "1",
      },
      {
        "question": "Sunday, at home :",
        "answer1": "Reading on the sofa, nothing beats the smell of an old book.",
        "answer1Total": "1",
        "answer2": "I dance in my living room, Vivaldi on the turntables.",
        "answer2Total": "2",
        "answer3": "Where are my dumbbells ?",
        "answer3Total": "4",
        "answer4": "I practice for MasterChef. Gordon Ramsay here i am !",
        "answer4Total": "3",
      },
      {
        "question": "Things that I love the most about Valorant : ",
        "answer1": "Definitively the 'BOOM HEADSHOTS'",
        "answer1Total": "4",
        "answer2": "Win the round, and the game afterward.",
        "answer2Total": "3",
        "answer3": "Plant the spike, it makes a nice noise.",
        "answer3Total": "2",
        "answer4": "The spectator mode. I am pacifist.",
        "answer4Total": "1",
      },
      {
        "question": "Board games :",
        "answer1": "Monopoly is tooooo long.",
        "answer1Total": "4",
        "answer2": "Connect 4. The little one, the classic, the giant, timeless.",
        "answer2Total": "2",
        "answer3": "The Clue. Colonel Mustard, you never have disapointed me.",
        "answer3Total": "3",
        "answer4": "The Twister. My back has a bad memory of it, my brain doesn't at all.",
        "answer4Total": "1",
      },
      {
        "question": "My allies are going to plant the spike on A :",
        "answer1": "I'm going with them, I'll revenge if one of them fall.",
        "answer1Total": "3",
        "answer2": "I will go first, the entry frag is mine !",
        "answer2Total": "4",
        "answer3": "Take the site guys, I will plant later.",
        "answer3Total": "1",
        "answer4": "Sneaky, I would rather surprise the enemies who leave from B.",
        "answer4Total": "2",
      },
      {
        "question": "For my Curriculum Vitae :",
        "answer1": "I'm not afraid to take risks.",
        "answer1Total": "3",
        "answer2": "I like teamwork.",
        "answer2Total": "2",
        "answer3": "I love challenges, none is insurmountable.",
        "answer3Total": "4",
        "answer4": "The health of my loved ones is very important to me.",
        "answer4Total": "1",
      },
      {
        "question": "To become a better player : ",
        "answer1": "I need a 'gaming' chair, and a lot of others stuffs.",
        "answer1Total": "2",
        "answer2": "I need to train. A lot.",
        "answer2Total": "3",
        "answer3": "I need low latency and 144hz.",
        "answer3Total": "1",
        "answer4": "Can I combine the three previous answers ? ",
        "answer4Total": "4",
      },
      {
        "question": "My favorite cinematic genre :",
        "answer1": "Epic. Mythology and Antiquity, a tasty blend.",
        "answer1Total": "2",
        "answer2": "Detective movies. Be a good police officer, it's a question of ethics.",
        "answer2Total": "1",
        "answer3": "Science-fiction. I see reality every day by my window, I have the right to dream.",
        "answer3Total": "3",
        "answer4": "Action movies. Right ! Left ! I left my eardrums there, but it was worth it.",
        "answer4Total": "4",
      },
      {
        "question": "2 vs 1 situation, your allie says : 'last A site' :",
        "answer1": "I'm going on a duel , one on one cowboy, this is my city.",
        "answer1Total": "4",
        "answer2": "Waiting for my friend, to take him down under a crossfire.",
        "answer2Total": "2",
        "answer3": "I take this opportunity to eat the crisps lying on my desk.",
        "answer3Total": "2",
        "answer4": "I'm waiting to see it on the map, he will eventually make noise.",
        "answer4Total": "1",
      },
      {
        "question": "In Matrix,",
        "answer1": "I take the blue pill.",
        "answer1Total": "2",
        "answer2": "I take the red pill.",
        "answer2Total": "4",
        "answer3": "I will never leave this room.",
        "answer3Total": "1",
        "answer4": "Convenient to move around the world so easily.",
        "answer4Total": "3",
      },
      {
        "question": "In your honnest opinion : ",
        "answer1": "Teleportation is a shitty concept.",
        "answer1Total": "3",
        "answer2": "A wall is worse if it has holes.",
        "answer2Total": "2",
        "answer3": "Spying is good, killing is better.",
        "answer3Total": "4",
        "answer4": "I think i am still in love with my ex.",
        "answer4Total": "1",
      },
      {
        "question": "You need to make a choice :",
        "answer1": "Team Lord of the Rings.",
        "answer1Total": "3",
        "answer2": "Team Vikings.",
        "answer2Total": "4",
        "answer3": "Team Game of Thrones.",
        "answer3Total": "2",
        "answer4": "Team Grey's anatomy.",
        "answer4Total": "1",
      },
      {
        "question": "My hobbies :",
        "answer1": "I am a fire worshiper. I can spend hours in front of a fireplace.",
        "answer1Total": "3",
        "answer2": "I had one of my best times, ice skating.",
        "answer2Total": "1",
        "answer3": "Slime has an addictive side. Its texture maybe?",
        "answer3Total": "2",
        "answer4": "I am a born blacksmith ! I like to beat the iron while it is hot.",
        "answer4Total": "4",
      },
      {
        "question": "Daily activities : ",
        "answer1": "Rather barbecue with friends.",
        "answer1Total": "3",
        "answer2": "Rather fencing lessons.",
        "answer2Total": "4",
        "answer3": "Rather trying to make homemade smoke bombs. (Bad idea)",
        "answer3Total": "2",
        "answer4": "Rather playing with firecrackers all my life.",
        "answer4Total": "1",
      },
      {
        "question": "During a game : ",
        "answer1": "I play with music, it's more motivating.",
        "answer1Total": "2",
        "answer2": "I just increase the sound of the game, to hear the steps.",
        "answer2Total": "3",
        "answer3": "I throw jokes on Discord, I watch a video, I do my shoelaces.",
        "answer3Total": "1",
        "answer4": "Training, training training, every moment makes me a better player.",
        "answer4Total": "4",
      },
      {
        "question": "My culinary preferences :",
        "answer1": "Feijoada, Caipirinha, this is a full breakfast to start the day off right !",
        "answer1Total": "3",
        "answer2": "Pierojki, Vodka, I will always have a little placein my belly for you !",
        "answer2Total": "2",
        "answer3": "Fish and chips, tea, long live the Queen !",
        "answer3Total": "2",
        "answer4": "Kimchi, Soju, south of the border !",
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
                    "lildesc" :    "You are dedicated to your comrades, and are undoubtedly a real asset to your team.",
                    "pouvoir1" :    "<b>Barrier Orb :</b> Conjure a large, solid wall. Right-click to rotate the wall before casting.",
                    "pouvoir2" : "<b>Slow Orb : </b>Cast out a radianite orb that breaks into a slowing field upon impact with the ground. All caught in the field are slowed and make noise when moving (When not sneaky). ",
                    "pouvoir3" : "<b>Healing Orb : </b>Heal an ally or yourself to full health over a few seconds.",
                    "ulti" : "<b>Resurrection : </b>Target a friendly corpse. After a short delay, revive them with full health."      
                    },
                    "Brimstone" : {
                    "lildesc" :    "Your orbital arsenal ensures your squad always has the advantage.",
                    "pouvoir1" :    "<b>Incendiary : </b>Launch an incendiary grenade that deploys a damaging field of fire.",
                    "pouvoir2" : "<b>Stim Beacon : </b>Target a nearby location to call in a Stim Beacon, giving all players near it Rapidfire.",
                    "pouvoir3" : "<b>Sky Smoke : </b>Use your map to call in orbital deployment smokescreens that obscure vision. Click to set the locations, and confirm to launch.",
                    "ulti" : "<b>Orbital Strike : </b>Use your map to target a location, launching a devastating orbital strike that pulses for high damage over several seconds."
                    },
                    "Cypher" : {
                    "lildesc" :    "The CIA is a rather advanced intelligence agency. You should think about joining them!",
                    "pouvoir1" :    "<b>Trapwire : </b>Place a stealthed tripwire between two walls. Triggering enemies are restrained and revealed for a short time. If the trap is not destroyed, it activates to daze the trapped victim. Can be picked up.",
                    "pouvoir2" : "<b>Cyber cage : </b>Toss out a remote activation trap. Reactivate to create a cage that slows enemies who pass through it. Look at a trap and press USE to detonate it, or hold ACTIVATE to detonate all.",
                    "pouvoir3" : "<b>Spycam : </b>Place a remote camera. After placing, reactivate to view the video feed. Left click while in camera to fire a tracking dart. Recharges when picked up or killed.",
                    "ulti" : "<b>Neural Theft : </b>Extract information from the corpse of an enemy, revealing the location of their living allies."  
                    },
                    "Omen" : {
                    "lildesc" :    "Dark and dark like the black rose, the magic of darkness surrounds you.",
                    "pouvoir1" :    "<b>Paranoia : </b>Send out an Ethereal shadow in a straight line, Nearsighting anyone it touches.",
                    "pouvoir2" : "<b>Shadow walk : </b>After a delay, dematerialize and teleport a short distance.",
                    "pouvoir3" : "<b>Dark Cover : </b>Cast out a stealthed ethereal orb that bursts into an obscuring sphere of shadow at its final location. Can be charged to increase distance.",
                    "ulti" : "<b>From the Shadows : </b>Select anywhere on the map to teleport and reform. When arriving, appear as a Shade, that will go back to your original location if killed. Once the teleport is complete, become Incorporeal for a short time."
                    },
                    "Sova" : {
                    "lildesc" :    "Of all the archers, few are those who master bows, technology and firearms.",
                    "pouvoir1" :    "<b>Shock Bolt : </b>Fire an explosive bolt that emits a damaging pulse of static energy upon impact.",
                    "pouvoir2" : "<b>Owl Drone : </b>Deploy a pilotable drone that can fire a dart that will Reveal enemies who are hit.",
                    "pouvoir3" : "<b>Recon Bolt : </b>Fire a bolt that deploys a sonar emitter. The sonar pings tag nearby enemies, causing them to be revealed. Can be destroyed.",
                    "ulti" : "<b>Hunter's Fury : </b>Fire up to three deadly energy blasts that spear across the map. Each hit enemy takes heavy damage and is marked."
                    },
                    "Viper" : {
                    "lildesc" :    "Vicious little creature, your poison invades as long as your heart is toxic enough.",
                    "pouvoir1" :    "<b>Snakebite : </b>Fire a projectile that explodes into a pool of damaging acid.",
                    "pouvoir2" : "<b>Poison Cloud : </b>Throw a gas emitter that you can reactivate to create a poisonous smoke cloud at the cost of fuel. The emitter can be picked up and thrown again after a short cooldown.",
                    "pouvoir3" : "<b>Toxic Screen : </b>Deploy a long line of gas emitters that you can reactivate to create a tall wall of toxic gas at the cost of fuel.",
                    "ulti" : "<b>Viper’s Pit : </b>Equip a chemical sprayer. Fire to spray a chemical cloud in all directions around Viper, creating a large cloud that reduces the vision range and maximum health of players inside of it."
                    },
                    "Breach" : {
                    "lildesc" :    "Heavy metals, earthquakes, each of your steps makes the ground shake.",
                    "pouvoir1" :    "<b>Aftershock : </b>Equip a Fusion Charge. Fire the charge to set a slow-activating burst through a wall. The bust does heavy damage to anyone caught in the area.",
                    "pouvoir2" : "<b>Flashpoint : </b>Equip a blinding charge. Fire the charge to set a fast-acting burst through a wall. The charge detonates to blind all players looking at it.",
                    "pouvoir3" : "<b>Fault Lines : </b>Equip a seismic blast. Hold Fire to increase the distance. Release to set off the quake, dazing all players in its zone in a line up to the zone.",
                    "ulti" : "<b>Rolling Thunder : </b>Equip a seismic charge. Fire to send a cascading quake through all terrain in a large cone. The quake dazes and knocks up anyone caught in it."
                    },
                    "Raze" : {
                    "lildesc" :    "BOOM! Bazookas and explosions rule your life, silence is clearly not your strong point.",
                    "pouvoir1" :    "<b>Boom Bot : </b>Equip a Boom Bot. Fire will deploy the bot, causing it to travel in a straight line on the ground, bouncing off walls. The Boom Bot will lock on to any enemies in its frontal cone and chase them, exploding for heavy damage if it reaches them.",
                    "pouvoir2" : "<b>Blast Pack : </b>Instantly throw a Blast Pack that will stick to surfaces. Re-Use the ability after deployment to detonate, damaging and moving anything hit.",
                    "pouvoir3" : "<b>Paint Shells : </b>Equip a cluster grenade. Fire to throw the grenade, which does damage and creates sub-munitions, each doing damage to anyone in their range.",
                    "ulti" : "<b>Showstopper : </b>Equip a rocket launcher. Fire shoots a rocket that does massive area damage on contact with anything."
                    },
                    "Phoenix" : {
                    "lildesc" :  "Fire worshiper, you love being in the spotlight!",
                    "pouvoir1" : "<b>Hot Hands :</b> Launches fireballs that explode after a slight delay or upon impact with the decor.",
                    "pouvoir2" : "<b>Blaze :</b> Throws a wall of fire that obstructs the vision of enemies and inflicts damage on anyone who passes through.",
                    "pouvoir3" : "<b>Signature Ability :</b> Curveball: launches a curved eruption that explodes like a flash grenade after a short delay, temporarily blinding everyone watching it.",
                    "ulti" : "<b>Ultimate Ability :</b> Run it Back: marks a position. If you die during the duration of this ability, or after it expires, you will be reborn where you marked, in full health."
                    },
                    "Jett" : {
                    "lildesc" :    "Ninja and neat style, you are without doubt the most versatile of assassins in the world. Luckily for you, the quiz is anonymous.",
                    "pouvoir1" :    "<b>Cloudburst : </b>Throw out a cloud of fog that obscures vision on impact. Hold down the ability button to bend the cloud’s in-flight trajectory.",
                    "pouvoir2" : "<b>Updraft : </b>After a brief wind up, propel yourself upwards.",
                    "pouvoir3" : "<b>Tailwind : </b>Immediately dash a short distance in the direction you’re moving.",
                    "ulti" : "<b>Blade Storm : </b>Arm yourself with several deadly throwing knives that deal moderate damage and kill on headshots. Scoring a kill restores all daggers. Left click throws a single dagger. Right click throws all remaining daggers in a short-ranged burst."
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
              <div class="agentrevealtxt">${agent}</span></div>
              </br>
              <span class="agentlildesc">${agents[agent].lildesc}</span>
              </br>
              <span class="agentlildesc">You and ${agent} are made for each other !</span>                   

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
                
              <button class="restart">Restart</button>      
               
<!--              <div class="loginasagent" title="You can switch agent later on."><a class="aloginasagent" href="#">Sign in as ${agent} !</a></div>-->

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