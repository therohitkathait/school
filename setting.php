<?php include "header.php";?>
<html>
<head>
  <style>
    .tab button {
      background-color: #fff; /* Default background color for options */
    }

    .tab button.active {
      background-color: #ccc; /* Background color for the selected active option */
    }

    .option-content {
      display: none;
    }

    .option-content.active {
      display: block;
    }
  </style>
</head>
<div class="container">
  <h2 class="addst">School Settings </h2>

  <div class="tab">
    <button class="tablinks active" onclick="openOption('option1')">Add Class & Fees</button>
    <button class="tablinks" onclick="openOption('option2')">Transport Fees</button>
    <button class="tablinks" onclick="openOption('option3')">Add Subject</button>
    <button class="tablinks" onclick="openOption('option4')">School Profile</button>
  </div>

  <div class="content">
    <div id="option1-content" class="tabcontent option-content active">
      <?php include "add-fees.php";?>
    </div>
    <div id="option2-content" class="tabcontent option-content">
      <?php include "add-tranfess.php";?>
    </div>
    <div id="option3-content" class="tabcontent option-content">
      <?php include "addsubject.php";?>
    </div>
    <div id="option4-content" class="tabcontent option-content">
      <?php include "scl-update.php";?>
    </div>
  </div>

  <script>
    // Function to open the selected option
    function openOption(option) {
      // Hide all option contents
      const optionContents = document.querySelectorAll('.option-content');
      optionContents.forEach((content) => {
        content.classList.remove('active');
      });

      // Show the selected option content
      const selectedOptionContent = document.getElementById(option + '-content');
      if (selectedOptionContent) {
        selectedOptionContent.classList.add('active');
      }

      // Remove the active class from all sidebar buttons
      const sidebarButtons = document.querySelectorAll('.tablinks');
      sidebarButtons.forEach((button) => {
        button.classList.remove('active');
      });

      // Add the active class to the selected sidebar button
      const selectedSidebarButton = document.querySelector('.tablinks[onclick^="openOption"][onclick*="' + option + '"]');
      if (selectedSidebarButton) {
        selectedSidebarButton.classList.add('active');
      }

      // Store the selected option in sessionStorage
      sessionStorage.setItem('selectedOption', option);
    }

    // Check if a selected option exists in sessionStorage
    window.addEventListener('DOMContentLoaded', () => {
      const selectedOption = sessionStorage.getItem('selectedOption');
      if (selectedOption) {
        openOption(selectedOption);
      } else {
        const defaultOption = document.querySelector('.option-content');
        if (defaultOption) {
          defaultOption.classList.add('active');
        }
      }
    });
  </script>
</div>
</body>
</html>
