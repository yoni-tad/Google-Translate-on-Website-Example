<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Language Switcher Example</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="path/to/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- Google Translate Widget Script -->
    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement(
          { pageLanguage: "en" },
          "google_translate_element"
        );
      }
    </script>
    <script
      type="text/javascript"
      src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
    ></script>
    <!-- Enhanced Custom CSS to hide Google Translate toolbar -->
    <style>
      .goog-te-gadget img {
        display: none !important;
      }
      body > .skiptranslate {
        display: none;
      }
      body {
        top: 0px !important;
      }
    </style>
  </head>
  <body>
    <!-- Google Translate Element -->
    <div id="google_translate_element" style="display: none"></div>

    <div class="container">
      <div class="dropdown">
        <button
          class="btn btn-primary dropdown-toggle"
          type="button"
          id="dropdownMenuButton"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Select Language
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#" onclick="translateLanguage('en')"
            >English</a
          >
          <a class="dropdown-item" href="#" onclick="translateLanguage('am')"
            >Spanish</a
          >
          <a class="dropdown-item" href="#" onclick="translateLanguage('om')"
            >French</a
          >
          <a class="dropdown-item" href="#" onclick="translateLanguage('ti')"
            >German</a
          >
          <!-- Add more languages as needed -->
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="path/to/jquery.slim.min.js"></script>
    <script src="path/to/popper.min.js"></script>
    <script src="path/to/bootstrap.min.js"></script>

    <!-- Custom JavaScript for Language Translation -->
    <script type="text/javascript">
      function translateLanguage(lang) {
        var translateElement = document.querySelector(".goog-te-combo");
        if (translateElement) {
          translateElement.value = lang;
          translateElement.dispatchEvent(new Event("change"));
        }
      }
    </script>
  </body>
</html>
