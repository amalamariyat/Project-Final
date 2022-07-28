    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                   
                   
                		<center>
                    		<h1>STUDENT CHECK ELIGIBILITY</h1>
                            <form action="afterChekingEligibility" method="post">
                                <input type="hidden" name="eligibility" value="<?php echo $eligibility; ?>">
                            <table>
                                <tr>
                                    <th>Highest Qualification</th>
                                    <td><select name="degreecourse">
                                        <option>Degree</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <th>Degree Specialisation</th>
                                    <td><select name="degreespecialisation">
                                        <option>SELECT</option>
                                        <option>BBA</option>
                                        <option>BCOM</option>
                                        <option>BCA</option>
                                        <option>BA</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <th>Degree mark in %</th>
                                    <td><input type="text" name="degreemark"></td>
                                </tr>
                                <tr>
                                    <th>IELTS mark</th>
                                    <td><input type="text" name="ieltsmark"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="submit"></td>
                                </tr>
                            </table>
                        </form>

                    		
                    	</center>


                </div>
            </div>
        </div>
    </section>


