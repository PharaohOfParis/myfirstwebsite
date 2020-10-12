<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="organization, scheduling, teamwork, checklists " />
    <meta name="author" content="Mohamed Abdelkoddous" />
    <title>Bamzooka | Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="./src/csscode.css" />

</head>

<body>

    <?php include "header.php" ?>

    <section role="try out" id="try_out" class="py-5">
        <div class="container mx-auto py-5 py-5">
            <h1 style="font-size: 45px; line-height: 60px;">Stop the Chaos. Organize Team Work with Process Checklists
            </h1>
            <p class="pb-5" style="font-size: 17px;">Create checklists, schedule them, assign them to your team, watch
                progress in real-time.</p>
            <div class="row">
                <form class="form-inline m-auto" method="post" action="send_mail.php">
                    <div class="form-group mb-2">
                        <input type="text" class="form-control ml-1" name="email" placeholder="Your work email">
                    </div>
                    <button type="submit" class="btn btn-light ml-2 mb-2" style="color:#cf4647; font-weight:700">
                        TRY FOR FREE</button>
                </form><br>
            </div>
            <p style="font-size: 17px;">Already using Bamzooka ? <a href="home.php"><u>Sign in.</u></a></p>
        </div>
    </section>

    <section role="describe" id="describe" class="py-5 my-5">
        <div class="container">
            <div class="row" style="text-align:center">
                <div class="col-12 col-md-4 col-sm-12">
                    <i class="far fa-window-restore fa-6x"></i>
                    <h4 class="pt-4">Checklists & Processes</h4>
                    <p class="description">Describe processes as checklists. E.g.: Employee on-boarding checklist.</p>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                    <i class="fas fa-cogs fa-6x"></i>
                    <h4 class="pt-4">Calendar</h4>
                    <p class="description">Start checklists anytime or use the built-in calendar to schedule repetitive
                        tasks.</p>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                    <i class="fas fa-globe-americas fa-6x"></i>
                    <h4 class="pt-4">Monitor</h4>
                    <p class="description">Watch progress in realtime and see team assignments status.</p>
                </div>
            </div>
            <div class="separator">
                <div class="col-3" style="margin:60px; margin-left:auto; margin-right:auto; border-top:1px solid #cf4747">
                </div>
            </div>
            <div class="row" style="text-align:center">
                <div class="col-12 col-md-4 col-sm-12">
                    <i class="fas fa-thumbs-up fa-6x"></i>
                    <h4 class="pt-4">Pass / Fail Checks</h4>
                    <p class="description">Pass / fail checks can be configured to ensure work done meets certain
                        standards.</p>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                    <i class="fas fa-lock fa-6x"></i>
                    <h4 class="pt-4">Security</h4>
                    <p class="description">Users are grouped into teams with specific access rights.</p>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                    <i class="fas fa-code-branch fa-6x"></i>
                    <h4 class="pt-4">Smart</h4>
                    <p class="description">Configure checklists with conditional logic.</p>
                </div>
            </div>
        </div>
    </section>

    <section role="quote" id="quote" class="py-5">
        <div class="container mx-auto">
            <h3 class="pt-5 mt-5">"Bamzooka helps document processes, organize work and improve quality of everything
                our teams do. It solves quality, consistency, reliability and turn-over challenges many organizations
                face so that the work is done on time with predictable quality. It is a huge productivity gain for any
                team, department, and organization of any size."</h3>
            <p class="pt-3 pb-5 mb-5" style=" font-size: 17px;">Serge Dacic, Timingcube - President</p>
        </div>
    </section>

    <?php include "footer.php" ?>

    <script src="https://kit.fontawesome.com/87d1c020bf.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>