
@extends('user.include.app')
<body>

   @section('main-content')
<!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

        <!-- Blog Post -->
        
        <div class="card mb-4">
          <img class="card-img-top" src="" alt="Card image cap">
          <div class="card-body">
            <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Choose Language</label>
          </div>
          <select class="custom-select" id="language">
            
          </select>
        </div>
          <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="">Text</span>
          </div>
          <input type="text" class="form-control" id="text" placeholder="Write Here Your Text" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <button class="btn btn-primary" id="speech">Speech</button>
          </div>
          
        </div>
        
        <!-- Pagination -->
        

      </div>


<script>
  var languageInput = document.getElementById('language');
  var textInput = document.getElementById('text');
  var speechInput = document.getElementById('speech');

  var voices = [];
  function getVoiceList(argument) {
    voices = speechSynthesis.getVoices();

    var options = '';
    voices.forEach((voice) => {
      options += `<option value="${voice.name}">${voice.name}</option>`;
    });

    languageInput.innerHTML = options;
  }

  getVoiceList();

  speechSynthesis.onvoiceschanged = getVoiceList;

  speechInput.addEventListener('click', function(){
    var language = languageInput.value;
    var text = textInput.value;

    var utterance = new SpeechSynthesisUtterance(text);

    voices.forEach((voice) => {
      if (voice.name == language) {
        utterance.voice = voice;
      }
    });

    speechSynthesis.speak(utterance);

  });

</script>



      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header" style="text-align: center;">Local Time</h5>
          <div class="card-body" style="background-color: #262626;">
             @include('user.include.datetime')
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection


</body>

</html>
