<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">


        <nav class="navbar navbar-expand-lg navbar-light py-3" style="background-image: linear-gradient(to left, #4ca1af , #c4e0e5)!important;">
            <div class="nav-wrapper row">
                <div class="collapse navbar-collapse d-flex justify-content-center align-items-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav d-flex justify-content-center align-items-center">
                        <h4 style="color: green;">Employee leave management system</h4>
                    </div>
                </div>

                <ul class="right col s9 m3 nav-right-menu">

                    <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                </ul>

                <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                    <li class="notificatoins-dropdown-container">
                        <ul>
                            <li class="notification-drop-title">Notifications</li>
                            <?php
                            $isread = 0;
                            $sql = "SELECT tblleaves.id as lid,tblemployees.FirstName,tblemployees.LastName,tblemployees.EmpId,tblleaves.PostingDate from tblleaves join tblemployees on tblleaves.empid=tblemployees.id where tblleaves.IsRead=:isread";
                            $query = $dbh->prepare($sql);
                            $query->bindParam(':isread', $isread, PDO::PARAM_STR);
                            $query->execute();
                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                            if ($query->rowCount() > 0) {
                                foreach ($results as $result) {               ?>


                                    <li>
                                        <a href="leave-details.php?leaveid=<?php echo htmlentities($result->lid); ?>">
                                            <div class="notification">
                                                <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                                <div class="notification-text">
                                                    <p><b><?php echo htmlentities($result->FirstName . " " . $result->LastName); ?><br />(<?php echo htmlentities($result->EmpId); ?>)</b> applied for leave</p><span>at <?php echo htmlentities($result->PostingDate); ?></b></span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                            <?php }
                            } ?>


                        </ul>
            </div>
        </nav>
    </header>