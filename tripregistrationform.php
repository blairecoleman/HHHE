<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "icon" type = "image/png" href = "assets/logo.jpg">
    <meta charset="UTF-8">
    <title>Our Impact</title>
    <link rel = "icon" type = "image/png" href = "assets/logo.jpg">
    <link rel="stylesheet" href="" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<div class = "headingRegular">
    <header>
        <img src ="assets/logo.png" alt = "haitian hope logo" width = "">
        <a  href = "index.php"><h1>Haitian Hope Humanitarian Efforts Inc.</h1></a>
    </header>
    <div class = "progress">

    </div>
</div>
<div>
    <h2>Trip Registration form</h2>
    <form method ="post" action = tripregistrationform.php class = "tripReg">
        <fieldset id = "page1" class = "formPage active">
            <legend>PAGE 1</legend>
            <div class = "formgroup">
                <label for = "fName">First Name:</label>
                <input id = "fName" name = "fName" type = "text">
                <label for = "lName"></label>
                <input id = "lName" name = "lName" type = "text">
                <label for = "add">Address:</label>
                <input id = add name = add type = "text" class ="userinput">
            </div>
            <div class = "formgroup">
                <label for = "cty">City:</label>
                <input id = cty name = add type = "text" class ="userinput">
            </div>
            <div class = "formgroup">
                <label for = "ste">State:</label>
                <select  id = "ste" name = "state" size = "1" class = >
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "Alabama">Alabama</option>
                    <option class = "states" value = "Alaska">Alaska</option>
                    <option class = "states" value = "Arizona">Arizona</option>
                    <option class = "states" value = "Arkansas">Arkansas</option>
                    <option class = "states" value = "California">California</option>
                    <option class = "states" value = "Colorado">Colorado</option>
                    <option class = "states" value = "Connecticut">Connecticut</option>
                    <option class = "states" value = "Delaware">Delaware</option>
                    <option class = "states" value = "Florida">Florida</option>
                    <option class = "states" value = "Georgia">Georiga</option>
                    <option class = "states" value = "Hawaii">Hawaii</option>
                    <option class = "states" value = "Idaho">Idaho</option>
                    <option class = "states" value = "Illinois">Illinois</option>
                    <option class = "states" value = "Indiana">Indiana</option>
                    <option class = "states" value = "Iowa">Iowa</option>
                    <option class = "states" value = "Kansas">Kansas</option>
                    <option class = "states" value = "Kentucky">Kentucky</option>
                    <option class = "states" value = "Louisiana">Louisiana</option>
                    <option class = "states" value = "Maine">Maine</option>
                    <option class = "states" value = "Maryland">Maryland</option>
                    <option class = "states" value = "Massachusetts">Massachusetts</option>
                    <option class = "states" value = "Michigan">Michigan</option>
                    <option class = "states" value = "Minnesota">Minnesota</option>
                    <option class = "states" value = "Mississippi">Mississippi</option>
                    <option class = "states" value = "Missouri">Missouri</option>
                    <option class = "states" value = "Montana">Montana</option>
                    <option class = "states" value = "Nebraska">Nebraska</option>
                    <option class = "states" value = "Nevada">Nevada</option>
                    <option class = "states" value = "New Hampshire">New Hampshire</option>
                    <option class = "states" value = "New Jersey">New Jersey</option>
                    <option class = "states" value = "New Mexico"> New Mexico</option>
                    <option class = "states" value = "New York"> New York</option>
                    <option class = "states" value = "North Carolina">North Carolina</option>
                    <option class = "states" value = "North Dakota">North Dakota</option>
                    <option class = "states" value = "Ohio">Ohio</option>
                    <option class = "states" value = "Oklahoma">Oklahoma</option>
                    <option class = "states" value = "Oregon">Oregon</option>
                    <option class = "states" value = "Pennsylvania">Pennsylvania</option>
                    <option class = "states" value = "Rhode Island">Rhode Island</option>
                    <option class = "states" value = "South Carolina">South Carolina</option>
                    <option class = "states" value = "South Dakota">South Dakota</option>
                    <option class = "states" value = "Tennessee">Tennessee</option>
                    <option class = "states" value = "Texas">Texas</option>
                    <option class = "states" value = "Utah">Utah</option>
                    <option class = "states" value = "Vermont">Vermont</option>
                    <option class = "states" value = "Virgina">Virgina</option>
                    <option class = "states" value = "Washington">Washington</option>
                    <option class = "states" value = "West Virgina">West Virgina</option>
                    <option class = "states" value = "Wisconsin">Wisconsin</option>
                    <option class = "states" value = "Wyoming">Wyoming</option>
                </select>
            </div>
            <div class = "formgroup">
                <label for = "zp">Zip:</label>
                <input id = "zp" name = "zp" class ="userinput" type = "text">
            </div>
            <div class = "formNav">
                <a href = "#page2"><button class = "formNavBut">Next</button></a>
            </div>
        </fieldset>
        <fieldset id = "page2" class = "formPage">
            <legend>PAGE 2</legend>
            <div class = "formgroup">
                <label for = eml>Email:</label>
                <input id = eml name = eml type = "text" class = "userinput">
            </div>
            <div class = "formgroup">
                <label for = occ>Occupation:</label>
                <input id = occ name = occ type = "text" class = "userinput">
            </div>
            <div class = "formgroup">
                <label for = "marital">Are you Single or Married?  </label>
                <select id = "marital" name = "marital" size = "1">
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "single">Single</option>
                    <option class = "states" value = "married">Married</option>
                    <option class = "states" value = "neither">Neither</option>
                </select>
            </div>
            <div class = "formgroup">
                <label for = "chld">Do you have Children?  </label>
                <select id = "chld" name = "chld" size = "1">
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "yes">Yes</option>
                    <option class = "states" value = "no">No</option>
                </select>
            </div>

            <label for = skll>Please list your interests, hobbies, and skills below(even if they seem unrelated to this trip):
            </label>
            <textarea class = "userinput" style = "margin: auto;" rows = 30 cols = 120 id = "skll" name = "skll" placeholder="Discuss your Special Skill set or Interest Area Here." maxlength = "2000"></textarea>
            <div class = "formgroup">
                <label for ="trvl">Have you ever traveled outside of the U.S?</label>
                <select id = trvl name = "trvl" size = "1">
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "yes">Yes</option>
                    <option class = "states" value = "no">No</option>
                </select>
            </div>
            <div class ="formgroup">
                <label for = "msstrp">Have you ever been on a mission trip?</label>
                <select id = msstrp name = "msstrip" size = "1">
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "yes">Yes</option>
                    <option class = "states" value = "no">No</option>
                </select>
            </div>
            <script></script>
            <label for = "msstrpex" style = "display: none;">If Yes, Explain</label>
            <textarea id = "msstrpex" name  = "msstrpex" rows = 10 cols = 120 style = "display: none; margin: auto" maxlength = "2000"></textarea>
            <div class = "formNav">
                <a href = "#page1"><button class = "formNavBut">Previous</button></a>
                <a href = "#page3"><button class = "formNavBut">Next</button></a>
            </div>
        </fieldset>
        <fieldset id = "page3" class = "formPage">
            <legend>PAGE 3</legend>
            <p style = "text-align: center;"><b>Passport Information:</b></p>
            <div class = "formgroup">
                <label for = "validpass">Do you have a valid passport? </label>
                <select id = "validpass">
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "yes">Yes</option>
                    <option class = "states" value = "no">No</option>
                </select>
            </div>
            <p style = "text-align: center;">Please write full name as it appears on your passport:</p>
            <div class = "formgroup">
                <label for = "plname">Surename:</label>
                <input id = "plname" type = "text" name = "plname" class = "userinput">
            </div>
            <div class = "formgroup">
                <label for = "pfname">Given Names:</label>
                <input id = "pfname" type = "text" name = "pfname" class = "userinput">
            </div>
            <div class = "formgroup">
                <label for = "nationality">Nationality:</label>
                <input id = "nationality" name = "nationality" type = "text" class = "userinput">
            </div>
            <div class = "formgroup">
                <label for = "pnumber">Passport Number:</label>
                <input id = "pnumber" name = "pnumber" type = "text" class = "userinput">
            </div>
            <p style = "text-align: center;">Date of Expiration:</p>
            <!--remember to place in yyyy-MM-DD format-->
            <div class = "formgroup">
                <label for = pmonth> Month:</label>
                <select id = pmonth name = "month" size = 1 class ="userinput">
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "January">January</option>
                    <option class = "states" value = "Febuary">Febuary</option>
                    <option class = "states" value = "March">March</option>
                    <option class = "states" value = "April">April</option>
                    <option class = "states" value = "May">May</option>
                    <option class = "states" value = "June">June</option>
                    <option class = "states" value = "July">July</option>
                    <option class = "states" value = "August">August</option>
                    <option class = "states" value = "Sept">September</option>
                    <option class = "states" value = "October">October</option>
                    <option class = "states" value = "November">November</option>
                    <option class = "states" value = "December">December</option>

                </select>
                <label for = "pday">Day:</label>
                <select id = pday name = day size = 1 class ="userinput">
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "1">1</option>
                    <option class = "states" value = "2">2</option>
                    <option class = "states" value = "3">3</option>
                    <option class = "states" value = "4">4</option>
                    <option class = "states" value = "5">5</option>
                    <option class = "states" value = "6">6</option>
                    <option class = "states" value = "7">7</option>
                    <option class = "states" value = "8">8</option>
                    <option class = "states" value = "9">9</option>
                    <option class = "states" value = "10">10</option>
                    <option class = "states" value = "11">11</option>
                    <option class = "states" value = "12">12</option>
                    <option class = "states" value = "13">13</option>
                    <option class = "states" value = "14">14</option>
                    <option class = "states" value = "15">15</option>
                    <option class = "states" value = "16">16</option>
                    <option class = "states" value = "17">17</option>
                    <option class = "states" value = "18">18</option>
                    <option class = "states" value = "19">19</option>
                    <option class = "states" value = "20">20</option>
                    <option class = "states" value = "21">21</option>
                    <option class = "states" value = "22">22</option>
                    <option class = "states" value = "23">23</option>
                    <option class = "states" value = "24">24</option>
                    <option class = "states" value = "25">25</option>
                    <option class = "states" value = "26">26</option>
                    <option class = "states" value = "27">27</option>
                    <option class = "states" value = "28">28</option>
                    <option class = "states" value = "29">29</option>
                    <option class = "states" value = "30">30</option>
                    <option class = "states" value = "31">31</option>
                </select>
                <label for = "pyear">Year:</label>
                <input id = pyear name = "year" type = "text" class ="userinput">
            </div>
            <div class = "formNav">
                <a href = "#page3"><button class = "formNavBut">Previous</button></a>
                <a href = "#page4"><button class = "formNavBut">Next</button></a>
            </div>
        </fieldset>
        <fieldset id = "page4" class = "formPage">
            <legend>PAGE 4</legend>
            <label for = "healthprob">Please list any health problems:</label>
            <textarea id = "healthprob" name = "healthprob" class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "List any health problems here" maxlength = "2000"></textarea>
            <div class = "formgroup">
                <label for = "creole">Do you speak French/Creole?</label>
                <select id = "creole" name = "creole" size = 1>
                    <option class = "states" value = ""></option>
                    <option class = "states" value = "yes">Yes</option>
                    <option class = "states" value = "no">No</option>
                </select>
            </div>
        <fieldset class ="formcategory">
            <p style = "text-align: center;">Church Affiliation: (if Applicable)</p>
            <div class = "formgroup">
                <label for = "church">Name of Local Church:</label>
                <input id = "church" name = "church" type = "text" class = "userinput">
            </div>
            <div class = "formgroup">
                <label for = "pastor">Name of Pastor:</label>
                <input id = "pastor" name = "pastor" type = "text" class = "userinput">
            </div>
            <div class = "formgroup">
                <label for = "ccity">City:</label>
                <input id = "ccity" name = "ccity" type = "text" class = "userinput">
                <label for = "cstate">State:</label>
                <input id = "cstate" name = "cstate" type = "text" class = "userinput">
            </div>
            <div class = "formcategory">
                <label for = "ministries">What ministries are you involved in?</label>
                <textarea id = "ministries" name = "ministries"  class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "List any ministries you are involved in" maxlength = "2000"></textarea>
            </div>
            <div class = "formcategory">
                <label for = "cministries">What is your experience with children's Ministry? What are your Skills and Interests?</label>
                <textarea id = "cministries" name = "cministries"  class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "List any ministries you are involved in" maxlength = "2000"></textarea>
            </div>
            <div class = "formcategory">
                <label for = "bchristian">What do you think it means to be a Christian?</label>
                <textarea id = "bchristian" name = "bchristian"  class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "List any ministries you are involved in" maxlength = "2000"></textarea>
            </div>
            <div class = "formcategory">
                <label for = "personaltest">Please share your personal testimony.</label>
                <textarea id = "personaltest" name = "personaltest"  class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "List any ministries you are involved in" maxlength = "2000"></textarea>
            </div>
        </fieldset>
            <div class = "formNav">
                <a href = "#page3"><button class = "formNavBut">Previous</button></a>
                <a href = "#page5"><button class = "formNavBut">Next</button></a>
            </div>
        </fieldset>
        <fieldset id = "page5" class = "formPage">
            <legend>PAGE 5</legend>
            <fieldset class = "formcategory">
                <legend style = "text-align: center;">Specialized ministry skills and talents:</legend>
                <div id = "specialCheck">
                    <input type = "checkbox" id = "drama" name = "special[]" value = "Drama">
                    <label class="labelIntrest" for = "drama">Drama</label>
                    <input type = "checkbox" id = "musicOrg" name = "special[]" value = "Music Organization">
                    <label class="labelIntrest" for = "musicOrg">Music Organization</label>
                    <input type = "checkbox" id = "artsCrafts" name = "special[]" value = "Art and/or Crafting Teaching">
                    <label class="labelIntrest" for = "artsCrafts">Art and/or Crafting Teaching</label>
                    <input type = "checkbox" id = "balloons" name = "special[]" value = "Balloons and Puppetry">
                    <label class="labelIntrest" for = "balloons">Balloons and Puppetry</label>
                </div>
            </fieldset>
            <fieldset class = "formcategory">
                <p style = "text-align: center;">Other:</p>
                <div class = "formcategory">
                    <label for = "tripExplanation">Why do you want to go on this trip?</label>
                    <textarea id = "tripExplanation" name = "tripExplanation"  class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "Explain why you want to go on this trip." maxlength = "2000"></textarea>
                </div>
                <div class = "formcategory">
                    <label for = "strengths">In your opinion, what are your strengths?</label>
                    <textarea id = "strengths" name = "strengths"  class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "Explain why you want to go on this trip." maxlength = "2000"></textarea>
                </div>
                <div class = "formcategory">
                    <label for = "weaknessess">In your opinion, what are your weaknesses?</label>
                    <textarea id = "weaknessess" name = "weaknessess"  class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "Explain why you want to go on this trip." maxlength = "2000"></textarea>
                </div>
                <div class = "formcategory">
                    <label for = "challenges">What do you think will be your biggest challenge on this trip?</label>
                    <textarea id = "challenges" name = "challenges"  class = "userinput" style = "margin: auto;" rows = 30 cols = 120 placeholder = "Explain why you want to go on this trip." maxlength = "2000"></textarea>
                </div>
                <div class = "formgroup">
                    <label for = "fundrasing" style = "text-align: justify; width: 60%;">Are you willing to raise the funds needed to cover the cost of the trip and meet payment deadlines?</label>
                    <select id = "fundrasing" name = "fundrasing" size = 1>
                        <option class = "states" value = ""></option>
                        <option class = "states" value = "yes">Yes</option>
                        <option class = "states" value = "no">No</option>
                    </select>
                </div>
                <div class = "formgroup">
                    <label for = "behavior" style = "text-align: justify; width: 60%;">On the mission field, do you agree not to use alcohol, tobacco, public
                        displays of affection between sexes (married or single), profane language, inappropriate dress
                        deemed disrespectful of the culture you are serving in, and/or critical or complaining attitude
                        or words?</label>
                    <select id = "behavior" name = "behavior" size = 1>
                        <option class = "states" value = ""></option>
                        <option class = "states" value = "yes">Yes</option>
                        <option class = "states" value = "no">No</option>
                    </select>
                </div>
                <div class = "formgroup">
                    <label for = "group" style = "text-align: justify; width: 60%;">Do you agree to remain with the group at all times and follow the instructions of the leaders?</label>
                    <select id = "group" name = "group" size = 1>
                        <option class = "states" value = ""></option>
                        <option class = "states" value = "yes">Yes</option>
                        <option class = "states" value = "no">No</option>
                    </select>
                </div>
                <div class = "formcategory">
                    <p>I am willing to follow the above guidelines even if I might not totally agree with them in every situation.</p>
                    <label for = "esig">Type Your Full Name as an Electronic Signature: </label>
                    <input id = "esig" type = "text" name = "esig" class = "userinput">
                    <label for = "esigdate">Date:</label>
                    <input id = "esigdate" type = "text" name = "esigdate" class = "userinput" placeholder =
                    "yyyy-mm-dd">
                </div>

                <div class = "formgroup">
                    <label for = "vaccines" style = "text-align: justify; width: 60%;">I understand that it is my responsibility to check with my physician concerning immunizations.</label>
                    <select id = "vaccines" name = "vaccines" size = 1>
                        <option class = "states" value = ""></option>
                        <option class = "states" value = "yes">Yes</option>
                        <option class = "states" value = "no">No</option>
                    </select>
                </div>
                <div class = "formgroup">
                    <label for = "payments" style = "text-align: justify; width: 60%;">I understand that if unexpected events happen it is possible that I will
                        have to pay an additional amount to help cover the added expense (such as delayed flights or
                        unexpected travel expenses). </label>
                    <select id = "payments" name = "payments" size = 1>
                        <option class = "states" value = ""></option>
                        <option class = "states" value = "yes">Yes</option>
                        <option class = "states" value = "no">No</option>
                    </select>
                </div>
        </fieldset>
            <div class = "formNav">
                <a href = "#page4"><button class = "formNavBut">Previous</button></a>
                <a href = "#page6"><button class = "formNavBut">Next</button></a>
            </div>
        </fieldset>
            <fieldset id = "page6" class = "formPage">
                <legend>PAGE 6</legend>
                <p style = "text-align: center;">Emergency Contact Information:</p>
                <p>Who may we contact in case of an emergency? </p>
                <div class = "forumgroup">
                    <label for = contactFName>First Name: </label>
                    <input id = "contactFName" name = "contactFName" type = text class ="userinput">
                    <label for = contactLName>Last Name: </label>
                    <input id = "contactLName" name = "contactLName" type = text class ="userinput">
                </div>
                <div class = "forumgroup">
                    <label for = relation>Relationship to Applicant: </label>
                    <input id = "relation" name = "relation" type = text class ="userinput">
                </div>
                <fieldset>
                    <div class = "formgroup">
                        <label for = "contactadd">Address:</label>
                        <input id = contactadd name = contactadd type = "text" class ="userinput">
                    </div>
                    <div class = "formgroup">
                        <label for = "contactcty">City:</label>
                        <input id = contactcty name = contactcty type = "text" class ="userinput">
                    </div>
                    <div class = "formgroup">
                        <label for = "contactste">State:</label>
                        <select  id = "contactste" name = "contactste" size = "1" class = >
                            <option class = "states" value = ""></option>
                            <option class = "states" value = "Alabama">Alabama</option>
                            <option class = "states" value = "Alaska">Alaska</option>
                            <option class = "states" value = "Arizona">Arizona</option>
                            <option class = "states" value = "Arkansas">Arkansas</option>
                            <option class = "states" value = "California">California</option>
                            <option class = "states" value = "Colorado">Colorado</option>
                            <option class = "states" value = "Connecticut">Connecticut</option>
                            <option class = "states" value = "Delaware">Delaware</option>
                            <option class = "states" value = "Florida">Florida</option>
                            <option class = "states" value = "Georgia">Georiga</option>
                            <option class = "states" value = "Hawaii">Hawaii</option>
                            <option class = "states" value = "Idaho">Idaho</option>
                            <option class = "states" value = "Illinois">Illinois</option>
                            <option class = "states" value = "Indiana">Indiana</option>
                            <option class = "states" value = "Iowa">Iowa</option>
                            <option class = "states" value = "Kansas">Kansas</option>
                            <option class = "states" value = "Kentucky">Kentucky</option>
                            <option class = "states" value = "Louisiana">Louisiana</option>
                            <option class = "states" value = "Maine">Maine</option>
                            <option class = "states" value = "Maryland">Maryland</option>
                            <option class = "states" value = "Massachusetts">Massachusetts</option>
                            <option class = "states" value = "Michigan">Michigan</option>
                            <option class = "states" value = "Minnesota">Minnesota</option>
                            <option class = "states" value = "Mississippi">Mississippi</option>
                            <option class = "states" value = "Missouri">Missouri</option>
                            <option class = "states" value = "Montana">Montana</option>
                            <option class = "states" value = "Nebraska">Nebraska</option>
                            <option class = "states" value = "Nevada">Nevada</option>
                            <option class = "states" value = "New Hampshire">New Hampshire</option>
                            <option class = "states" value = "New Jersey">New Jersey</option>
                            <option class = "states" value = "New Mexico"> New Mexico</option>
                            <option class = "states" value = "New York"> New York</option>
                            <option class = "states" value = "North Carolina">North Carolina</option>
                            <option class = "states" value = "North Dakota">North Dakota</option>
                            <option class = "states" value = "Ohio">Ohio</option>
                            <option class = "states" value = "Oklahoma">Oklahoma</option>
                            <option class = "states" value = "Oregon">Oregon</option>
                            <option class = "states" value = "Pennsylvania">Pennsylvania</option>
                            <option class = "states" value = "Rhode Island">Rhode Island</option>
                            <option class = "states" value = "South Carolina">South Carolina</option>
                            <option class = "states" value = "South Dakota">South Dakota</option>
                            <option class = "states" value = "Tennessee">Tennessee</option>
                            <option class = "states" value = "Texas">Texas</option>
                            <option class = "states" value = "Utah">Utah</option>
                            <option class = "states" value = "Vermont">Vermont</option>
                            <option class = "states" value = "Virgina">Virgina</option>
                            <option class = "states" value = "Washington">Washington</option>
                            <option class = "states" value = "West Virgina">West Virgina</option>
                            <option class = "states" value = "Wisconsin">Wisconsin</option>
                            <option class = "states" value = "Wyoming">Wyoming</option>
                        </select>
                    </div>
                    <div class = "formgroup">
                        <label for = "contactzp">Zip:</label>
                        <input id = "contactzp" name = "zp" class ="userinput" type = "text">
                    </div>
                    <div class = "formgroup">
                        <label for = "contactphone">Phone:</label>
                        <input type = "text"  id = "contactphone" name = "contactphone" class = "userinput">
                    </div>
                    <div class = "formgroup">
                        <label for = contacteml>Email:</label>
                        <input id = contacteml name = contacteml type = "text" class = "userinput">
                    </div>
            </fieldset>
                <div class = "formNav">
                    <a href = "#page5"><button class = "formNavBut">Previous</button></a>
                    <a href = "#page7"><button class = "formNavBut">Next</button></a>
                </div>
            </fieldset>
            <fieldset id = "page7" class = "formPage">
                    <legend>PAGE 7</legend>
                    <p>I hereby certify that all statements in this application are true and complete to the best of my knowledge.</p>
                    <label for = "fesig">Type Your Full Name as an Electronic Signature: </label>
                    <input id = "fesig" type = "text" name = "fesig" class = "userinput">
                    <label for = "fdate">Date:</label>
                    <input id = "fdate" type = "text" class = "userinput">
                <fieldset>
                    <legend>Character References</legend>
                    <div>
                    <label>Reference 1:</label>
                    <label for ="ref1First">First Name:</label>
                    <input id = "ref1First" name = "ref1first" type = "text">
                    <label for ="ref1Last">Last Name:</label>
                    <input id = "ref1Last" name = "ref1Last" type = "text">
                    <label for ="ref1email">Email:</label>
                    <input id = "ref1email" name = "ref1email" type = "text">
                    <label for ="ref1Num">Number:</label>
                    <input id = "ref1Num" name = "ref1num" type = "text">
                    </div>
                    <div>
                        <label>Reference 2:</label>
                        <label for ="ref2First">First Name:</label>
                        <input id = "ref2First" name = "ref2First" type = "text">
                        <label for ="ref2Last">Last Name:</label>
                        <input id = "ref2Last" name = "ref2Last" type = "text">
                        <label for ="ref2email">Email:</label>
                        <input id = "ref2email" name = "ref2email" type = "text">
                        <label for ="ref2Num">Number:</label>
                        <input id = "ref2Num" name = "ref2Num" type = "text">
                    </div>
                    <div>
                        <label>Reference 3:</label>
                        <label for ="ref3First">First Name:</label>
                        <input id = "ref3First" name = "ref3First" type = "text">
                        <label for ="ref3Last">Last Name:</label>
                        <input id = "ref3Last" name = "ref3Last" type = "text">
                        <label for ="ref3email">Email:</label>
                        <input id = "ref3email" name = "ref3email" type = "text">
                        <label for ="ref3Num">Number:</label>
                        <input id = "ref3Num" name = "ref3Num" type = "text">
                    </div>
                </fieldset>
                <div class = "formNav">
                    <a href = "#page6"><button class = "formNavBut">Previous</button></a>
                </div>
            </fieldset>
            <button type = submit class = "callToAction">Submit</button>
    </form>
<?php
//assign all of these submissions a variable and add to database
//send a reference sheet to each of the references automatically
//et up an admin page that allows a site administrator to access a submission and report the application status

?>
</div>
</body>
</html>
