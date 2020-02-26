<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Emotion Survey</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="annotate.css">
    <script src="annotator.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="jquery.multiselect.js"></script>
    <link href="jquery.multiselect.css" rel="stylesheet" type="text/css">
    <script type='text/javascript'>
     $(function(){
       $('.emotion-select').load("emotion-select.html"); }
     );
    </script>
    <img src="decooda_logo.png" id="logo">
    <h1>Emotion Survey</h1>
  </head>
  <body style="background-color:#95b6c2;">
    <div class="main">
      Read the following conversation between a customer and a customer service representative. For each customer turn in the conversation, choose up to 3 emotions you believe the customer is exhibiting (or choose No Emotion if there is none). <br><br> After you have chosen the relevant emotions, answer the open-ended questions below.<br><br>
      <table class="table" style="background-color: white;">
        <col class="text-center" width="200px;">
        <thead>
          <tr>
            <th></th>
            <th>Conversation</th>
            <th id="emotion-header">Emotions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="customer">Customer:</td>
            <td>Hello.</td>
            <td><?php include("emotion-select.html"); ?></td>
          </tr>
          <tr>
            <td class="rep">Representative:</td>
            <td>Hi, how may I assist you today?</td>
            <td></td>
          </tr>
          <tr>
            <td class="customer">Customer:</td>
            <td>Well, i have an att go phone and i put 60 dollars on it and bought the 60 dollar unlimited talk/text plan.</td>
            <td><?php include("emotion-select.html"); ?></td>
          </tr>
          <tr>
            <td class="customer">Customer:</td>
            <td>however, it doesn't seem to be activated. somehow it isn't working, because texts are still costing me.</td>
            <td><?php include("emotion-select.html"); ?></td>
          </tr>
          <tr>
            <td class="customer">Customer:</td>
            <td>because after every message i get a follow up message stating that my balance is lower. and that the text costs .20 usd.</td>
            <td><?php include("emotion-select.html"); ?></td>
          </tr>
          <tr>
            <td class="rep">Representative:</td>
            <td>I apologize for the problem.  Please contact an AT&T Wireless representative at 1.800.331.0500.  Unfortunately I do not have access to that service.</td>
            <td></td>
          </tr>
          <tr>
            <td class="customer">Customer:</td>
            <td>i'll just hang myself.</td>
            <td><?php include("emotion-select.html"); ?></td>
          </tr>
          <tr>
            <td class="rep">Representative:</td>
            <td>Right behind you</td>
            <td></td>
          </tr>
          <tr>
            <td class="customer">Customer:</td>
            <td>lol</td>
            <td><?php include("emotion-select.html"); ?></td>
          </tr>
        </tbody>
      </table>
      <br><br>
      <div style="width:800px;margin:0 auto;">
        <h2 style="text-align:center;">Questions</h2>
        <br>
        <div class="form-group" style="text-align:center;">
          <label for="question1"><strong>1.</strong>  In your opinion, what could be some possible effects of this exchange on the customer? (e.g. the customer cancels service with the provider)</label>
          <textarea class="form-control textarea" id="question1" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group" style="text-align:center;">
          <label for="question2"><strong>2.</strong>  If you were the customer in this scenario, how would you have liked the representative to solve your issue?</label>
          <textarea class="form-control textarea" id="question2" rows="3"></textarea>
        </div>
        <br><br>
        <button type="button" class="btn btn-secondary btn-lg btn-block">Submit</button>
      </div>
    </div>
    <footer id="footer">© 2018 Decooda International Inc. All rights reserved. Decooda®, the Decooda logo, and the names and marks associated with Decooda’s products are trademarks of Decooda and / or its affiliates. All other trademarks are the property of their respective companies.</footer>
  </body>
</html>
