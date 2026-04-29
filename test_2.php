<?php include 'includes/header.php'; ?>
<style>
    .radio-container {
    border: 1px solid #ccc;
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: 0.3s;
  }
  
  .radio-container:hover {
    background-color: #f8f9fa;
  }

  .radio-container input {
    margin-right: 15px;
  }
</style>

<script>
function showCompleted() {
    var myModal = new bootstrap.Modal(document.getElementById('completedModal'));
    myModal.show();
}
</script>
<main class="container flex-grow-1 py-4 min-vh-100">
    <div class=" d-flex justify-content-between mb-4">
         <button type="button" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
            </svg>
            Back
        </button>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-dark">หน้าแรก</a></li>
                <li class="breadcrumb-item active" aria-current="page">หลักสูตร</li>
                <li class="breadcrumb-item active" aria-current="page">บทที่ 1</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex flex-column align-items-center border border-dark rounded w-25 mx-auto py-3 mb-2">
        <p class="h4">Time : <span class="text-danger">00:00:00</span></p>
    </div>

    <div class=" d-flex justify-content-between mb-1">
        <p class="leading">Questions</p>
        <p class="leading">0/10</p>
    </div>
    <hr class="w-100"></hr>
    <table class="table table-bordered mb-2">
            <tbody>
                <tr class="text-center">
                    <td >1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                </tr>
            </tbody>
    </table>
    <p class="leading">The exam can choose only one answer.</p>
    <p class="leading mb-2">1. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla, nesciunt. </p>
    <label class="radio-container">
        <input type="radio" name="optionGroup" value="1">
        <span>Lorem Ipsum 1</span>
    </label>

    <label class="radio-container">
        <input type="radio" name="optionGroup" value="2">
        <span>Lorem Ipsum 2</span>
    </label>

    <label class="radio-container">
        <input type="radio" name="optionGroup" value="3">
        <span>Lorem Ipsum 3</span>
    </label>

    <label class="radio-container">
        <input type="radio" name="optionGroup" value="4">
        <span>Lorem Ipsum 4</span>
    </label>
    <div class="d-flex justify-content-center mb-2">
        <button type="button" class="btn btn-light text-primary border-primary me-2">Previous</button>
        <button type="button" class="btn btn-success" onclick="showCompleted()">Send</button>
    </div>
    <!-- Modal : completed -->
    <div class="modal fade" id="completedModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center py-4">
            <div class="modal-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" fill="#28a745"/>
                    
                    <path fill="white" d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>
                
                <h3>Completed</h3>
                
                <button type="button" class="btn btn-primary px-5 mt-3" data-bs-dismiss="modal">OK</button>
            </div>
            </div>
        </div>
    </div>
    
</main>

<?php include 'includes/footer.php'; ?>