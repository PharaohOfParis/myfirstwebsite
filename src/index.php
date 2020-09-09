<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="organization, scheduling, teamwork, checklists " />
    <meta name="author" content="Mohamed Abdelkoddous" />
    <title>Bamzooka | Home</title>
    <link rel="stylesheet" type="text/css" href="csscode.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/87d1c020bf.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php include "header.php" ?>

    <section role="try out" id='try_out'>
        <div class="mx-auto" style="width: 700px;">
            <h1>Stop the Chaos. Organize Team Work with Process Checklists</h1>
            <p>Create checklists, schedule them, assign them to your team, watch progress in real-time.</p>
            <div class="mx-auto" style="width: 400px;">
                <form method='post' action='send_mail.php'>
                    <div class="row">
                        <div class="col">
                            <input type='text' name='mail' placeholder="Your work email" />
                        </div>
                        <div class="col">
                            <input type='submit' value='TRY FOR FREE' />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <p>Already using Bamzooka ? <a href="home.php">Sign in.</a></p>
    </section>

    <section role="describe" id='describe' class='py-5 my-5'>
        <div class="container">
            <div class="row" style="text-align:center">
                <div class="col">
                    <i class="far fa-window-restore fa-6x"></i>
                    <h4 class='pt-4'>Checklists & Processes</h4>
                    <p class="description">Describe processes as checklists. E.g.: Employee on-boarding checklist.</p>
                </div>
                <div class="col">
                    <i class="fas fa-cogs fa-6x"></i>
                    <h4 class='pt-4'>Calendar</h4>
                    <p class="description">Start checklists anytime or use the built-in calendar to schedule repetitive
                        tasks.</p>
                </div>
                <div class="col">
                    <i class="fas fa-globe-americas fa-6x"></i>
                    <h4 class='pt-4'>Monitor</h4>
                    <p class="description">Watch progress in realtime and see team assignments status.</p>
                </div>
            </div>
            <div class="separator">
                <div class="col-3"
                    style="margin:60px; margin-left:auto; margin-right:auto; border-top:1px solid #cf4747">
                </div>
            </div>
            <div class="row" style="text-align:center">
                <div class="col">
                    <i class="fas fa-thumbs-up fa-6x"></i>
                    <h4 class='pt-4'>Pass / Fail Checks</h4>
                    <p class="description">Pass / fail checks can be configured to ensure work done meets certain
                        standards.</p>
                </div>
                <div class="col">
                    <i class="fas fa-lock fa-6x"></i>
                    <h4 class='pt-4'>Security</h4>
                    <p class="description">Users are grouped into teams with specific access rights.</p>
                </div>
                <div class="col">
                    <i class="fas fa-code-branch fa-6x"></i>
                    <h4 class='pt-4'>Smart</h4>
                    <p class="description">Configure checklists with conditional logic.</p>
                </div>
            </div>
        </div>
    </section>

    <section role="quote" id='quote' class='py-5 my-5'>
        <div class="mx-auto" style="width: 700px;">
            <p class="h3">"Bamzooka helps document processes, organize work and improve quality of everything our teams
                do. It
                solves quality, consistency, reliability and turn-over challenges many organizations face so that the
                work is done on time with predictable quality. It is a huge productivity gain for any team, department,
                and organization of any size."</p>
            <p class='h4'>Serge Dacic, Timingcube - President</p>
        </div>
    </section>

    <?php include "footer.php" ?>

</body>

</html>