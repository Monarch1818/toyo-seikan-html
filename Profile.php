<?php include 'includes/header.php'; ?>

<style>
    .container-profile {

        h4 {
            margin-left: 5%;
            margin-top: 2%;
        }

        .container {
            width: 700px;
            margin: 40px auto;
            padding: 30px;
            border: 2px solid #2c5aa0;
            border-radius: 10px;
            background: #fff;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header i {
            font-size: 30px;
            color: #2c5aa0;
        }

        .profile-img {
            display: flex;
            justify-content: center;
            margin: 15px 0;
        }

        .profile-img img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        .edit-btn {
            display: block;
            margin: 10px auto 20px;
            padding: 5px 20px;
            border: 1px solid #2c5aa0;
            background: white;
            border-radius: 15px;
            cursor: pointer;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px 20px;
            max-width: 600px;
            margin: 0 auto;
            margin-bottom: 50px;
        }

        label {
            font-size: 14px;
            color: #2c5aa0;
        }

        input,
        select {
            width: 100%;
            padding: 6px;
            border: 1px solid #2c5aa0;
            border-radius: 5px;
            background: #f8fbff;
        }

        .full-width {
            grid-column: span 2;
        }

        .profile-box {
            border: 4px solid #00529C;
            border-radius: 10px;
            padding: 20px;
            max-width: 700px;
            margin: auto;
            background: #fff;
        }

        .admin-title {
            color: #00529C;
        }
    }
</style>


<main class="container-fluid ">
    <div class="container-profile">

        <h4 class="text-left mb-4 mt-3">Profile</h4>

        <div class="profile-box">

            <div class="header">
                <i class="bi bi-person-fill-gear"></i>
                <h3 class="admin-title">Admin</h3>
            </div>

            <div class="profile-img">
                <img src="https://cdn.pixabay.com/photo/2026/03/23/07/20/salofoto-dog-10187835_1280.jpg" alt="profile">
            </div>

            <button class="edit-btn">Edit</button>

            <div class="form-grid">
                <div>
                    <label>Organization</label>
                    <select>
                        <option>Toyo Seikan</option>
                    </select>
                </div>

                <div>
                    <label>Company</label>
                    <select>
                        <option>Toyo Seikan</option>
                    </select>
                </div>

                <div>
                    <label>Department</label>
                    <select>
                        <option>Admin</option>
                    </select>
                </div>

                <div>
                    <label>Position</label>
                    <select>
                        <option>Admin</option>
                    </select>
                </div>

                <div>
                    <label>Email</label>
                    <input type="text" value="ascnetwork@brother.co.th">
                </div>

                <div>
                    <label>Password</label>
                    <input type="text" value="Admin">
                </div>

                <div>
                    <label>Full name</label>
                    <input type="text" value="Administrator">
                </div>

                <div>
                    <label>Employee ID</label>
                    <input type="text" value="1010101010">
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>