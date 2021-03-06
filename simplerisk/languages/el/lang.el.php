<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d, g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'Το σπίτι',
    'RiskManagement'=>'Διαχείριση Κινδύνου',
    'Reporting'=>'Αναφοράς',
    'Configure'=>'Ρυθμίστε τις παραμέτρους',
    'MyProfile'=>'Το Προφίλ Μου',
    'Logout'=>'Αποσύνδεση',
    'LogInHere'=>'Συνδεθείτε Εδώ',
    'Username'=>'Όνομα χρήστη',
    'Password'=>'Κωδικό πρόσβασης',
    'ForgotYourPassword'=>'Ξεχάσατε τον κωδικό σας',
    'Login'=>'Είσοδος',
    'Reset'=>'Επαναφορά',
    'Send'=>'Στείλτε',
    'Update'=>'Ενημέρωση',
    'SendPasswordResetEmail'=>'Στείλτε Την Επαναφορά Του Κωδικού Πρόσβασης Email',
    'PasswordReset'=>'Επαναφορά Του Κωδικού Πρόσβασης',
    'ResetToken'=>'Επαναφορά Token',
    'RepeatPassword'=>'Επαναλάβετε Τον Κωδικό Πρόσβασης',
    'Submit'=>'Υποβολή',
    'ProfileDetails'=>'Τα Στοιχεία Του Προφίλ',
    'LastLogin'=>'Τελευταία Είσοδος',
    'ChangePassword'=>'Αλλαγή Κωδικού Πρόσβασης',
    'CurrentPassword'=>'Τρέχοντα Κωδικό Πρόσβασης',
    'NewPassword'=>'Νέο Κωδικό Πρόσβασης',
    'ConfirmPassword'=>'Επιβεβαιώστε Τον Κωδικό Πρόσβασης',
    'ConfigureRiskFormula'=>'Ρυθμίστε Τις Παραμέτρους Κινδύνου Φόρμουλα',
    'ConfigureReviewSettings'=>'Ρυθμίσετε Την Αναθεώρηση Ρυθμίσεις',
    'AddAndRemoveValues'=>'Προσθέσετε και να Καταργήσετε Τιμές',
    'UserManagement'=>'Διαχείριση Χρηστών',
    'RedefineNamingConventions'=>'Επαναπροσδιορισμός Συμβάσεις Ονομασίας',
    'AuditTrail'=>'Διαδρομή Ελέγχου',
    'Extras'=>'Extras',
    'Announcements'=>'Ανακοινώσεις',
    'About'=>'Για',
    'Impact'=>'Επιπτώσεις',
    'Likelihood'=>'Πιθανότητα',
    'MitigationEffort'=>'Προσπάθειες Μετριασμού',
    'Change'=>'Αλλαγή',
    'to'=>'να',
    'AddANewUser'=>'Προσθέσετε ένα Νέο Χρήστη',
    'Type'=>'Τύπος',
    'FullName'=>'Πλήρες Όνομα',
    'EmailAddress'=>'E-mail',
    'Teams'=>'Ομάδα(ες)',
    'ALL'=>'ΌΛΑ',
    'NONE'=>'NONE',
    'UserResponsibilities'=>'Ευθύνες Χρήστη',
    'AbleToSubmitNewRisks'=>'Τη δυνατότητα να Υποβάλλουν Νέους Κινδύνους',
    'AbleToModifyExistingRisks'=>'Μπορείτε να Τροποποιήσετε Υπάρχοντες Κινδύνους',
    'AbleToCloseRisks'=>'Ικανός να Κλείσει Κινδύνους',
    'AbleToPlanMitigations'=>'Σε θέση να σχεδιάζουν Μετριασμούς',
    'AbleToReviewLowRisks'=>'Σε θέση να Επανεξετάσει Χαμηλή Κινδύνους',
    'AbleToReviewMediumRisks'=>'Σε θέση να Επανεξετάσει το Μέσο Κινδύνους',
    'AbleToReviewHighRisks'=>'Σε θέση να Επανεξετάσει υψηλούς Κινδύνους',
    'AllowAccessToConfigureMenu'=>'Επιτρέπουν την Πρόσβαση στο "Διαμόρφωση" του Μενού',
    'MultiFactorAuthentication'=>'Multi-Factor Authentication',
    'None'=>'None',
    'Add'=>'Προσθέστε',
    'ViewDetailsForUser'=>'Δείτε Λεπτομέρειες για το Χρήστη',
    'DetailsForUser'=>'Λεπτομέρειες για το Χρήστη',
    'Select'=>'Επιλέξτε',
    'EnableAndDisableUsers'=>'Ενεργοποιήσετε και να Απενεργοποιήσετε Χρήστες',
    'EnableAndDisableUsersHelp'=>'Χρησιμοποιήστε αυτό το χαρακτηριστικό για να ενεργοποιήσετε ή να απενεργοποιήσετε συνδέσεις χρήστη, διατηρώντας παράλληλα τη διαδρομή ελέγχου των δραστηριοτήτων των χρηστών',
    'DisableUser'=>'Απενεργοποίηση χρήστη',
    'Disable'=>'Απενεργοποίηση',
    'EnableUser'=>'Επιτρέπει στο χρήστη',
    'Enable'=>'Ενεργοποίηση',
    'DeleteAnExistingUser'=>'Διαγραφή ενός Υπάρχοντος Χρήστη',
    'DeleteCurrentUser'=>'Διαγραφή του τρέχοντος χρήστη',
    'Delete'=>'Διαγραφή',
    'SendPasswordResetEmailForUser'=>'Στείλτε την επαναφορά του κωδικού πρόσβασης ηλεκτρονικού ταχυδρομείου για το χρήστη',
    'Category'=>'Κατηγορία',
    'AddNewCategoryNamed'=>'Να προσθέσετε νέα κατηγορία με το όνομα',
    'DeleteCurrentCategoryNamed'=>'Διαγραφή του τρέχοντος κατηγορία που ονομάζεται',
    'Team'=>'Ομάδα',
    'AddNewTeamNamed'=>'Προσθέστε νέα ομάδα με το όνομα',
    'DeleteCurrentTeamNamed'=>'Διαγραφή του τρέχοντος ομάδα με το όνομα',
    'Technology'=>'Τεχνολογία',
    'AddNewTechnologyNamed'=>'Προσθέστε νέα τεχνολογία που ονομάζεται',
    'DeleteCurrentTechnologyNamed'=>'Διαγράψτε την τρέχουσα τεχνολογία που ονομάζεται',
    'SiteLocation'=>'Τοποθεσία/Περιοχή',
    'AddNewSiteLocationNamed'=>'Προσθέστε νέο site/τοποθεσία με το όνομα',
    'DeleteCurrentSiteLocationNamed'=>'Διαγράψτε την τρέχουσα τοποθεσία/περιοχή που ονομάζεται',
    'ControlRegulation'=>'Κανονισμού Ελέγχου',
    'AddNewControlRegulationNamed'=>'Προσθήκη νέου κανονισμού ελέγχου, με το όνομα',
    'DeleteCurrentControlRegulationNamed'=>'Διαγραφή του τρέχοντος κανονισμού ελέγχου, με το όνομα',
    'RiskPlanningStrategy'=>'Κίνδυνος Στρατηγικής Σχεδιασμού',
    'AddNewRiskPlanningStrategyNamed'=>'Προσθέστε νέο κίνδυνο το σχεδιασμό και στρατηγική με το όνομα',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Διαγραφή του τρέχοντος κίνδυνο το σχεδιασμό και στρατηγική με το όνομα',
    'CloseReason'=>'Σε Κοντινή Λόγο',
    'AddNewCloseReasonNamed'=>'Προσθήκη νέου κοντά το λόγο που ονομάζεται',
    'DeleteCurrentCloseReasonNamed'=>'Διαγραφή του τρέχοντος κοντά το λόγο που ονομάζεται',
    'IWantToReviewHighRiskEvery'=>'Θέλω να επανεξετάσει ΥΨΗΛΟΎ κινδύνου για κάθε',
    'IWantToReviewMediumRiskEvery'=>'Θέλω να επανεξετάσει ΜΈΣΟΥ κινδύνου για κάθε',
    'IWantToReviewLowRiskEvery'=>'Θέλω να επανεξετάσει ΧΑΜΗΛΌ κίνδυνο κάθε',
    'days'=>'ημέρες',
    'MyClassicRiskFormulaIs'=>'Μου Κλασικό Κινδύνου Τύπος Είναι',
    'RISK'=>'ΚΊΝΔΥΝΟΣ',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Θεωρώ ΥΨΗΛΟΎ κινδύνου να είναι κάτι μεγαλύτερο από',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Θεωρώ ΜΈΣΟΥ κινδύνου να είναι μικρότερη από το παραπάνω, αλλά μεγαλύτερη από',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Θεωρώ ΧΑΜΗΛΟΎ κινδύνου να είναι μικρότερη από το παραπάνω, αλλά μεγαλύτερη από',
    'HighRisk'=>'Υψηλού Κινδύνου',
    'MediumRisk'=>'Μέσου Κινδύνου',
    'LowRisk'=>'Χαμηλού Κινδύνου',
    'Irrelevant'=>'Άσχετο',
    'SubmitYourRisks'=>'Υποβάλουν Τους Κινδύνους Σας',
    'PlanYourMitigations'=>'Το Σχέδιο Σας Μετριασμούς',
    'PerformManagementReviews'=>'Εκτελέστε Τη Διαχείριση Κριτικές',
    'PrioritizeForProjectPlanning'=>'Προτεραιότητα για το Σχεδιασμό του Έργου',
    'ReviewRisksRegularly'=>'Επανεξέταση Των Κινδύνων Τακτικά',
    'DocumentANewRisk'=>'Έγγραφο ένα Νέο Κίνδυνο',
    'UseThisFormHelp'=>'Χρησιμοποιήστε αυτή τη φόρμα για να καταγράψετε ένα νέο κίνδυνο για την εξέταση στη Διαδικασία Διαχείρισης της Επικινδυνότητας',
    'Subject'=>'Θέμα',
    'ExternalReferenceId'=>'Εξωτερικής Αναφοράς ID',
    'ControlNumber'=>'Αριθμός Ελέγχου',
    'Owner'=>'Ιδιοκτήτη',
    'OwnersManager'=>'Ιδιοκτήτη Manager',
    'RiskScoringMethod'=>'Βαθμολόγησης Κινδύνου Μέθοδος',
    'CurrentLikelihood'=>'Τρέχουσα Πιθανότητα',
    'CurrentImpact'=>'Τρέχουσα Επιπτώσεις',
    'RiskAssessment'=>'Αξιολόγηση Του Κινδύνου',
    'AdditionalNotes'=>'Συμπληρωματικές Σημειώσεις',
    'UNREVIEWED'=>'UNREVIEWED',
    'PASTDUE'=>'ΠΑΡΕΛΘΌΝ ΛΌΓΩ',
    'ID'=>'ID',
    'Status'=>'Κατάσταση',
    'Risk'=>'Κίνδυνος',
    'DaysOpen'=>'Ημέρες',
    'CalculatedRisk'=>'Υπολογισμένο Ρίσκο',
    'SubmittedBy'=>'Υποβλήθηκε Από',
    'NextReviewDate'=>'Την Επόμενη Ημερομηνία Αναθεώρησης',
    'CVSSRiskScoring'=>'CVSS Βαθμολόγησης Κινδύνου',
    'DREADRiskScoring'=>'DREAD Βαθμολόγησης Κινδύνου',
    'OWASPRiskScoring'=>'OWASP Βαθμολόγησης Κινδύνου',
    'CustomRiskScoring'=>'Συνήθειας Βαθμολόγησης Κινδύνου',
    'MitigationPlanningHelp'=>'Παρακάτω είναι η λίστα που υποβάλλονται κινδύνους που απαιτούν μετριασμού σχεδιασμό',
    'ManagementReviewHelp'=>'Παρακάτω είναι η λίστα που υποβάλλονται κινδύνους που απαιτούν μια ανασκόπηση από τη διοίκηση',
    'Submitted'=>'Υποβλήθηκε',
    'MitigationPlanned'=>'Μετριασμού Προγραμματιστεί',
    'ManagementReview'=>'Ανασκόπηση Από Τη Διοίκηση',
    'No'=>'Όχι',
    'Yes'=>'Ναι',
    'AddAndRemoveProjects'=>'Προσθέσετε και να Αφαιρέσετε τα Προγράμματα',
    'AddAndRemoveProjectsHelp'=>'Να προσθέσετε και να αφαιρέσετε τα έργα, προκειμένου να συνδέσει πολλαπλές κινδύνων για την ιεράρχηση',
    'AddNewProjectNamed'=>'Προσθέστε νέο project με το όνομα',
    'DeleteCurrentProjectNamed'=>'Διαγραφή του τρέχοντος έργο που ονομάζεται',
    'AddUnassignedRisksToProjects'=>'Προσθέστε Unassigned Κινδύνων σε Έργα',
    'AddUnassignedRisksToProjectsHelp'=>'Drag and drop unassigned κινδύνους που σημειώνονται για το υπόψη έργο, στην κατάλληλη καρτέλα πρόγραμμα',
    'PrioritizeProjects'=>'Δοθεί Προτεραιότητα Σε Έργα',
    'PrioritizeProjectsHelp'=>'Μετακινήστε έργα γύρω και να αλλάξετε τη σειρά των προτεραιοτήτων. Μόλις τελειώσετε, μην ξεχάσετε να πατήσετε το κουμπί "Ενημέρωση" για να αποθηκεύσετε τις αλλαγές σας',
    'SaveRisksToProjects'=>'Εξοικονομήστε Κινδύνων σε Έργα',
    'RiskId'=>'Κίνδυνος ID',
    'RiskActions'=>'Κίνδυνος Δράσεις',
    'ReopenRisk'=>'Ανοίξτε Ξανά Κινδύνου',
    'CloseRisk'=>'Κοντά Κινδύνου',
    'EditRisk'=>'Edit Κινδύνου',
    'PlanAMitigation'=>'Το σχέδιο ελάφρυνσης',
    'PerformAReview'=>'Εκτελέστε μια Κριτική',
    'AddAComment'=>'Προσθέστε ένα Σχόλιο',
    'ShowRiskScoringDetails'=>'Εμφάνιση Βαθμολόγησης Κινδύνου Λεπτομέρειες',
    'HideRiskScoringDetails'=>'Απόκρυψη Βαθμολόγησης Κινδύνου Λεπτομέρειες',
    'Details'=>'Λεπτομέρειες',
    'SubmissionDate'=>'Ημερομηνία Υποβολής',
    'DateSubmitted'=>'Ημερομηνία Υποβολής',
    'EditDetails'=>'Επεξεργαστείτε Τις Λεπτομέρειες',
    'Mitigation'=>'Μετριασμού',
    'MitigationDate'=>'Μετριασμού Ημερομηνία',
    'PlanningStrategy'=>'Στρατηγική Σχεδιασμού',
    'CurrentSolution'=>'Τρέχουσα Λύση',
    'SecurityRequirements'=>'Απαιτήσεις Ασφαλείας',
    'SecurityRecommendations'=>'Με Τις Συστάσεις Ασφαλείας',
    'EditMitigation'=>'Edit Μετριασμού',
    'LastReview'=>'Τελευταία Αναθεώρηση',
    'ReviewDate'=>'Ημερομηνία Επανεξέτασης',
    'Reviewer'=>'Κριτής',
    'Review'=>'Αναθεώρηση',
    'NextStep'=>'Το Επόμενο Βήμα',
    'Comments'=>'Σχόλια',
    'ViewAllReviews'=>'Δείτε Όλα Τα Σχόλια',
    'ReviewHistory'=>'Αναθεώρηση Της Ιστορίας',
    'Comment'=>'Σχόλιο',
    'ClassicRiskScoring'=>'Κλασικό Βαθμολόγησης Κινδύνου',
    'RiskScoringActions'=>'Βαθμολόγησης Κινδύνου Δράσεις',
    'UpdateClassicScore'=>'Ενημέρωση Κλασικό Βαθμολογία',
    'ScoreBy'=>'Βαθμολογία από',
    'RISKClassicExp1'=>'ΚΊΝΔΥΝΟΣ = ( Πιθανότητα x Αντίκτυπο + 2(Impact) )',
    'RISKClassicExp2'=>'ΚΊΝΔΥΝΟΣ = ( Πιθανότητα x Αντίκτυπο + Επιπτώσεων )',
    'RISKClassicExp3'=>'ΚΊΝΔΥΝΟΣ = ( Πιθανότητα x Επιπτώσεων )',
    'RISKClassicExp4'=>'ΚΊΝΔΥΝΟΣ = ( Πιθανότητα x Αντίκτυπο + Πιθανότητα )',
    'RISKClassicExp5'=>'ΚΊΝΔΥΝΟΣ = ( Πιθανότητα x Αντίκτυπο + 2(Πιθανότητα) )',
    'Reason'=>'Λόγος',
    'CloseOutInformation'=>'Να Κλείσει Πληροφορίες',
    'SubmitManagementReview'=>'Υποβάλουν Επανεξέτασης Της Διαχείρισης, Για',
    'SubmitRiskMitigation'=>'Υποβάλουν Άμβλυνσης Του Κινδύνου',
    'RiskDashboard'=>'Πίνακας Κινδύνου',
    'RiskTrend'=>'Κίνδυνος Τάση',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Όλα τα Ανοιχτά Κινδύνους που Μου έχουν Ανατεθεί από το Επίπεδο Κινδύνου',
    'AllOpenRisksByRiskLevel'=>'Όλα τα Ανοιχτά Κινδύνους από το Επίπεδο Κινδύνου',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Όλα τα Ανοιχτά Κίνδυνοι Θεωρούνται για Έργα από το Επίπεδο Κινδύνου',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Όλα τα Ανοιχτά Κινδύνους Δεκτές Μέχρι την Επόμενη Επανεξέταση, από το Επίπεδο Κινδύνου',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Όλα τα Ανοιχτά Κινδύνους να Υποβάλουν Παραγωγής Ζήτημα με το Επίπεδο Κινδύνου',
    'AllOpenRisksByScoringMethod'=>'Όλα τα Ανοιχτά Κινδύνους από την Μέθοδο Βαθμολόγησης',
    'AllClosedRisksByRiskLevel'=>'Όλα Κλειστά Κινδύνους από το Επίπεδο Κινδύνου',
    'SubmittedRisksByDate'=>'Υποβλήθηκε Κινδύνους Από Την Ημερομηνία',
    'MitigationsByDate'=>'Μετριασμούς Από Την Ημερομηνία',
    'ManagementReviewsByDate'=>'Ανασκοπήσεις Από Τη Διοίκηση Με Βάση Την Ημερομηνία',
    'ProjectsAndRisksAssigned'=>'Έργα και τους Κινδύνους που Ανατίθενται',
    'OpenRisks'=>'Ανοίξτε Κινδύνους',
    'ClosedRisks'=>'Κλειστό Κινδύνους',
    'ReportMyOpenHelp'=>'Η έκθεση αυτή δείχνει όλα τα ανοιχτά κινδύνους που έχουν τον τρέχοντα χρήστη, όπως ο ιδιοκτήτης ή ο διαχειριστής συνδέεται με τον κίνδυνο να διαταχθεί από το επίπεδο κινδύνου',
    'ReportOpenHelp'=>'Η έκθεση αυτή δείχνει όλα τα ανοιχτά κινδύνους που διέταξε επίπεδο κινδύνου',
    'ReportProjectsHelp'=>'Η έκθεση αυτή δείχνει όλα τα ανοιχτά κίνδυνοι θεωρούνται για έργα που διέταξε επίπεδο κινδύνου',
    'ReportNextReviewHelp'=>'Η έκθεση αυτή δείχνει όλα τα ανοιχτά κινδύνους δεκτές μέχρι την επόμενη επανεξέταση, διέταξε επίπεδο κινδύνου',
    'ReportProductionIssuesHelp'=>'Η έκθεση αυτή δείχνει όλα τα ανοιχτά κινδύνους που υποβάλλονται ως παραγωγή θέματα που διέταξε επίπεδο κινδύνου',
    'ReportRiskScoringHelp'=>'Η έκθεση φέρει τον κίνδυνο μέθοδοι βαθμολόγησης και τους κινδύνους που σκόραρε με κάθε',
    'ReportClosedHelp'=>'Η έκθεση αυτή δείχνει όλα κλειστά κινδύνους που διέταξε επίπεδο κινδύνου',
    'ReportSubmittedByDateHelp'=>'Αυτή η έκθεση παρουσιάζει όλους τους κινδύνους που διέταξε ημερομηνία υποβολής',
    'ReportMitigationsByDateHelp'=>'Η έκθεση αυτή δείχνει όλα μετριασμούς προγραμματισμένη διέταξε μετριασμού ημερομηνία',
    'ReportMgmtReviewsByDateHelp'=>'Η έκθεση αυτή δείχνει όλες τις ανασκοπήσεις από τη διοίκηση διέταξε την αναθεώρηση ημερομηνία',
    'ReportProjectsAndRisksHelp'=>'Η έκθεση αυτή δείχνει όλα τα έργα και τους κινδύνους που τους έχει ανατεθεί',
    'Language'=>'Γλώσσα',
    'AllOpenRisksNeedingReview'=>'Όλα τα Ανοιχτά Κινδύνους που Χρειάζονται μια Κριτική',
    'ReportReviewNeededHelp'=>'Η έκθεση αυτή δείχνει όλα τα ανοιχτά κινδύνους που χρειάζονται μια ανασκόπηση από τη διοίκηση',
    'CustomValue'=>'Προσαρμοσμένη Αξία',
    'ClosedRisksByDate'=>'Κλειστό Κινδύνους Από Την Ημερομηνία',
    'DateClosed'=>'Ημερομηνία Κλειστό',
    'ClosedBy'=>'Κλειστά Από',
    'ReportClosedByDateHelp'=>'Αυτή η έκθεση παρουσιάζει όλους τους κινδύνους που διέταξε το κλείσιμο ραντεβού',
    'AllOpenRisksByTeam'=>'Όλα τα Ανοιχτά Κινδύνους από την Ομάδα',
    'ReportRiskTeamsHelp'=>'Η έκθεση αυτή δείχνει όλες τις ομάδες και τους κινδύνους που έχουν ανατεθεί σε κάθε',
    'Unassigned'=>'Unassigned',
    'AllOpenRisksByTechnology'=>'Όλα Τα Ανοιχτά Κινδύνους Από Την Τεχνολογία',
    'ReportRiskTechnologiesHelp'=>'Η έκθεση αυτή δείχνει όλες τις τεχνολογίες και τους κινδύνους που έχουν ανατεθεί σε κάθε',
    'RiskLevel'=>'Επίπεδο Κινδύνου',
    'BasedOnTheCurrentRiskScore'=>'Με βάση το τρέχον σκορ κινδύνου, την επόμενη ημερομηνία της επανεξέτασης θα είναι ',
    'WouldYouLikeToUseADifferentDate'=>'Θα θέλατε να χρησιμοποιήσετε μια διαφορετική ημερομηνία αντ \' αυτού;',
    'RisksOpenedAndClosedOverTime'=>'Κίνδυνοι που Άνοιξε και Έκλεισε με την Πάροδο του Χρόνου',
    'AllRiskScoresAreAdjusted'=>'Ο κίνδυνος αποτελέσματα έχουν προσαρμοστεί για να χωρέσει σε μια κλίμακα 0-10.',
    'DetermineProjectStatus'=>'Να Προσδιορίσετε Την Κατάσταση Του Έργου',
    'ProjectStatusHelp'=>'Μέρος των έργων σε κατηγορίες με βάση την τρέχουσα κατάστασή τους.',
    'ActiveProjects'=>'Ενεργά Έργα',
    'OnHoldProjects'=>'Σε Αναμονή Έργα',
    'CompletedProjects'=>'Έργα Που Ολοκληρώθηκαν',
    'CancelledProjects'=>'Ακυρώνονται Έργα',
    'UpdateProjectStatuses'=>'Ενημέρωση Έργου Καταστάσεις',
    'HighRiskReport'=>'Υψηλού Κινδύνου Έκθεση',
    'TotalOpenRisks'=>'Συνολικό Άνοιγμα Κινδύνους',
    'TotalHighRisks'=>'Συνολικά Υψηλούς Κινδύνους',
    'HighRiskPercentage'=>'Υψηλού Κινδύνου Το Ποσοστό',
    'UpdateClassicScore'=>'Ενημέρωση Κλασικό Βαθμολογία',
    'CurrentLikelihood'=>'Τρέχουσα Πιθανότητα',
    'CurrentImpact'=>'Τρέχουσα Επιπτώσεις',   
    'UpdateCVSSScore'=>'Ενημέρωση CVSS Βαθμολογία',
    'BaseScoreMetrics'=>'Βασική Βαθμολογία Μετρήσεις',
    'AttackVector'=>'Επίθεση Διάνυσμα',
    'AttackComplexity'=>'Επίθεση Πολυπλοκότητα',
    'Authentication'=>'Έλεγχος ταυτότητας',
    'ConfidentialityImpact'=>'Εμπιστευτικότητα Επιπτώσεις',
    'IntegrityImpact'=>'Ακεραιότητα Επιπτώσεις',
    'AvailabilityImpact'=>'Διαθεσιμότητα Επιπτώσεις',
    'TemporalScoreMetrics'=>'Χρονική Βαθμολογία Μετρήσεις',
    'Exploitability'=>'Exploitability',
    'RemediationLevel'=>'Αποκατάσταση Επίπεδο',
    'ReportConfidence'=>'Έκθεση Εμπιστοσύνη',
    'EnvironmentalScoreMetrics'=>'Περιβαλλοντικές Μετρήσεις Βαθμολογία',
    'CollateralDamagePotential'=>'Παράπλευρες Απώλειες Δυναμικού',
    'TargetDistribution'=>'Στόχος Διανομής',
    'ConfidentialityRequirement'=>'Υποχρέωση Εχεμύθειας',
    'IntegrityRequirement'=>'Ακεραιότητα Απαίτηση',
    'AvailabilityRequirement'=>'Διαθεσιμότητα Απαίτηση',
    'UpdateDREADScore'=>'Ενημέρωση ΤΡΌΜΟΥ Βαθμολογία',
    'DamagePotential'=>'Βλάβη Πιθανή',
    'Reproducibility'=>'Αναπαραγωγιμότητα',
    'AffectedUsers'=>'Οι Χρήστες Που Επηρεάζονται,',
    'Discoverability'=>'Γνωστοποίησης',
    'UpdateOWASPScore'=>'Ενημέρωση OWASP Βαθμολογία',
    'ThreatAgentFactors'=>'Απειλή Πράκτορα Παράγοντες',
    'SkillLevel'=>'Επίπεδο Δεξιοτήτων',
    'Motive'=>'Κίνητρο',
    'Opportunity'=>'Ευκαιρία',
    'Size'=>'Μέγεθος',
    'VulnerabilityFactors'=>'Ένα Θέμα Ευπάθειας Παράγοντες',
    'EaseOfDiscovery'=>'Ευκολία Ανακάλυψη',
    'EaseOfExploit'=>'Ευκολία Εκμεταλλεύονται',
    'Awareness'=>'Ευαισθητοποίηση',
    'IntrusionDetection'=>'Η Ανίχνευση Εισβολής',
    'TechnicalImpact'=>'Τεχνικά Επιπτώσεις',
    'LossOfConfidentiality'=>'Η απώλεια της Εμπιστευτικότητας',
    'LossOfIntegrity'=>'Η απώλεια της Ακεραιότητας',
    'LossOfAvailability'=>'Απώλεια της Διαθεσιμότητας',
    'LossOfAccountability'=>'Απώλεια της Λογοδοσίας',
    'BusinessImpact'=>'Επιχειρηματικού Αντίκτυπου',
    'FinancialDamage'=>'Οικονομική Ζημία',
    'ReputationDamage'=>'Η Βλάβη Της Φήμης',
    'NonCompliance'=>'Μη Συμμόρφωση',
    'PrivacyViolation'=>'Η Παραβίαση Της Ιδιωτικής Ζωής',
    'UpdateCustomScore'=>'Ενημέρωση Προσαρμοσμένη Βαθμολογία',
    'ManuallyEnteredValue'=>'Να Εισαχθούν Χειροκίνητα Αξία',
    'ScoreByClassic'=>'Βαθμολογία από την Κλασική',
    'ScoreByCVSS'=>'Βαθμολογία από CVSS',
    'ScoreByDREAD'=>'Βαθμολογία από τον ΦΌΒΟ',
    'ScoreByOWASP'=>'Βαθμολογία από OWASP',
    'ScoreByCustom'=>'Βαθμολογία από Συνήθεια',
    'BaseVector'=>'Βάση Διάνυσμα',
    'TemporalVector'=>'Χρονικό Διάνυσμα',
    'EnvironmentalVector'=>'Περιβαλλοντική Διάνυσμα',
    'SupportingDocumentation'=>'Δικαιολογητικά',
    'Import'=>'Εισαγωγή',
    'Export'=>'Εξαγωγή',
    'ActivateTheImportExportExtra'=>'Ενεργοποιήστε την Εισαγωγή/Εξαγωγή Έξτρα',
    'PrintableView'=>'Εκτυπώσιμη Προβολή',
    'GroupBy'=>'Ομάδα Από',
    'IncludedColumns'=>'Περιλαμβάνονται Στήλες',
    'AllRisks'=>'Όλοι Οι Κίνδυνοι',
    'DynamicRiskReport'=>'Δυναμική Κινδύνου Έκθεση',
    'ObsoleteReports'=>'Παρωχημένες Αναφορές',
    'Project'=>'Το έργο',
    'SortBy'=>'Ταξινόμηση Κατά',
    'MonthSubmitted'=>'Μήνα Που Υποβάλλεται',
    'AssetManagement'=>'Διαχείριση Περιουσιακών Στοιχείων',
    'AutomatedDiscovery'=>'Αυτοματοποιημένη Ανακάλυψη',
    'BatchImport'=>'Μαζική Εισαγωγή',
    'ManageAssets'=>'Διαχείριση Περιουσιακών Στοιχείων',
    'AssetValuation'=>'Αποτίμηση Περιουσιακών Στοιχείων',
    'AllowAccessToAssetManagementMenu'=>'Επιτρέπουν την Πρόσβαση σε "Asset Management" Μενού',
    'AutomatedDiscoveryHelp'=>'Ανακαλύψτε όλα τα ζωντανά διευθύνσεις IP στο τέθηκε IP range. Live διευθύνσεις IP θα πρέπει να προστεθεί στον κατάλογο. Αποδεκτές μορφές:',
    'IPRange'=>'IP Range',
    'Search'=>'Αναζήτηση',
    'AddANewAsset'=>'Προσθέσετε ένα Νέο στοιχείο',
    'DeleteAnExistingAsset'=>'Διαγραφή ενός Υπάρχοντος Στοιχείου',
    'AssetName'=>'Περιουσιακών Στοιχείων Όνομα',
    'IPAddress'=>'Διεύθυνση IP',
    'AssetWasAddedSuccessfully'=>'Περιουσιακό στοιχείο προστέθηκε με επιτυχία.',
    'AssetWasDeletedSuccessfully'=>'Περιουσιακό στοιχείο διαγράφηκε με επιτυχία.',
    'ThereWasAProblemAddingTheAsset'=>'Υπήρξε ένα πρόβλημα κατά την προσθήκη του περιουσιακού στοιχείου.',
    'ThereWasAProblemDeletingTheAsset'=>'Υπήρξε ένα πρόβλημα κατά τη διαγραφή περιουσιακών στοιχείων.',
    'ComingSoon'=>'Σύντομα Κοντά Σας',
    'ExportRisks'=>'Εξαγωγή Κινδύνους',
    'ExportMitigations'=>'Εξαγωγή Μετριασμούς',
    'ExportReviews'=>'Εξαγωγή Κριτικές',
    'ExportCombined'=>'Εξαγωγή Σε Συνδυασμό',
    'MitigatedBy'=>'Μετριάζεται Από',
    'MitigationId'=>'Μετριασμού ID',
    'ReviewId'=>'Αναθεώρηση ID',
    'AffectedAssets'=>'Επηρεάζονται Περιουσιακά Στοιχεία',
    'Activate'=>'Ενεργοποίηση',
    'DeleteRisks'=>'Διαγραφή Κινδύνους',
    'DeletedRisksCannotBeRecovered'=>'Διαγράφονται Οι Κίνδυνοι Δεν Μπορούν Να Ανακτηθούν',
    'RisksDeletedSuccessfully'=>'Κινδύνου(s) Διαγραφεί Επιτυχώς',
    'ThereWasAProblemDeletingTheRisk'=>'Υπήρξε ένα Πρόβλημα με τη Διαγραφή του Κινδύνου(s)',
    'Activated'=>'ΕΝΕΡΓΟΠΟΙΕΊΤΑΙ',
    'IWantToReviewInsignificantRiskEvery'=>'Θέλω να επανεξετάσει ΑΣΉΜΑΝΤΟ κίνδυνο κάθε',
    'Insignificant'=>'Ασήμαντο',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Θεωρώ ΠΟΛΎ ΥΨΗΛΟΎ κινδύνου να είναι κάτι μεγαλύτερο από',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Θεωρώ ΥΨΗΛΟΎ κινδύνου να είναι μικρότερη από το παραπάνω, αλλά μεγαλύτερη από',
    'VeryHigh'=>'Πολύ Υψηλή',
    'VeryHighRisk'=>'Πολύ Υψηλό Κίνδυνο',
    'IWantToReviewVeryHighRiskEvery'=> 'Θέλω να επανεξετάσει ΠΟΛΎ ΥΨΗΛΟΎ κινδύνου για κάθε',
    'AbleToReviewVeryHighRisks'=>'Σε θέση να Επανεξετάσει Πολύ υψηλούς Κινδύνους',
    'AbleToReviewInsignificantRisks'=>'Σε θέση να Επανεξετάσει Ασήμαντο Κινδύνους',
    'TotalVeryHighRisks'=>'Συνολικά Πολύ Υψηλούς Κινδύνους',
    'VeryHighRiskPercentage'=>'Πολύ Υψηλό Κίνδυνο Ποσοστό',
    'AllTeams'=>'Όλες Οι Ομάδες',
    'FileUploadSettings'=>'Ανεβάστε Το Αρχείο Ρυθμίσεων',
    'AllowedFileTypes'=>'Επιτρέπεται Τύπους Αρχείων',
    'AddNewFileTypeOf'=>'Προσθήκη νέου αρχείου τύπου',
    'DeleteCurrentFileTypeOf'=>'Διαγραφή τρέχοντος αρχείου τύπου',
    'MaximumUploadFileSize'=>'Το Μέγιστο Μέγεθος Αρχείου Αποστολής',
    'Bytes'=>'Bytes',
    'CheckAll'=>'Ελέγξτε Όλες',
    'CheckAllRiskMgmt'=>'Ελέγξτε Το Σύνολο Της Διαχείρισης Των Κινδύνων',
    'CheckAllAssetMgmt'=>'Ελέγξτε Όλες Asset Management',
    'CheckAllConfigure'=>'Έλεγχος Όλων Των Παραμέτρων',
    'MitigationTeam'=>'Μετριασμού Ομάδα',
    'ImportRisks'=>'Εισαγωγή Κινδύνους',
    'ImportAssets'=>'Εισαγωγή Στοιχείων Ενεργητικού',
    'AssetValue'=>'Αξία Ενεργητικού',
    'Register'=>'Μητρώο',
    'RegisterSimpleRisk'=>'Εγγραφείτε SimpleRisk',
    'RegistrationText'=>'Με την εγγραφή SimpleRisk θα πρέπει να παρέχουν τα στοιχεία επικοινωνίας σας, έτσι ώστε να μπορεί να ενημερωθεί με τις τελευταίες πληροφορίες έκδοσης και σημαντικές ειδοποιήσεις ασφαλείας. Οι πληροφορίες σας δεν θα πωληθούν σε τρίτους. Εγγεγραμμένοι περιπτώσεις έχουν επίσης τη δυνατότητα να υποστηρίζεται και να αναβαθμιστεί με το πάτημα ενός κουμπιού.',
    'RegistrationInformation'=>'Πληροφορίες Εγγραφής',
    'Company'=>'Εταιρεία',
    'JobTitle'=>'Τίτλος Εργασίας',
    'Phone'=>'Τηλέφωνο',
    'UpgradeSimpleRisk'=>'Αναβάθμιση SimpleRisk',
    'UpgradeInstructions'=>'Αυτή η ενότητα χρησιμοποιεί την Αναβάθμιση Παραπάνω. Για να βεβαιωθείτε ότι έχετε την πιο πρόσφατη έκδοση, επιλέξτε "Ενημέρωση", καταχωρήστε ξανά, και να φορτώσετε εκ νέου αυτή τη σελίδα.',
    'NoUpgradeNeeded'=>'Καμία αναβάθμιση είναι απαραίτητη αυτή τη στιγμή.',
    'BackupDatabase'=>'Δημιουργία αντιγράφων ασφαλείας της βάσης Δεδομένων',
    'UpgradeApplication'=>'Αναβάθμιση της Εφαρμογής',
    'UpgradeDatabase'=>'Αναβάθμιση της βάσης Δεδομένων',
    'CustomExtras'=>'Συνήθειας Extras',
    'CustomExtrasText'=>'Θα ήταν φοβερό αν όλα ήταν ελεύθερα, σωστά; Ας ελπίσουμε ότι ο πυρήνας SimpleRisk πλατφόρμα είναι σε θέση να εξυπηρετήσει όλες σας αναγκών διαχείρισης του κινδύνου. Αλλά, αν βρείτε τον εαυτό σας ακόμα θέλουν περισσότερο τη λειτουργικότητα, έχουμε αναπτύξει μια σειρά από "Extras" που θα κάνουν ακριβώς αυτό.',
    'Upgrade'=>'Αναβάθμιση',
    'Install'=>'Εγκατάσταση',
    'Purchase'=>'Αγορά',
    'PasswordPolicy'=>'Πολιτική Κωδικού Πρόσβασης',
    'MinimumNumberOfCharacters'=>'Ελάχιστος Αριθμός Χαρακτήρων',
    'RequireAlphaCharacter'=>'Απαιτούν Alpha Χαρακτήρα',
    'RequireUpperCaseCharacter'=>'Απαιτεί Κεφαλαίο Χαρακτήρα',
    'RequireLowerCaseCharacter'=>'Απαιτούν Πεζών Χαρακτήρων',
    'RequireNumericCharacter'=>'Απαιτούν Αριθμητικών Χαρακτήρων',
    'RequireSpecialCharacter'=>'Απαιτούν Ειδικό Χαρακτήρα',
    'Enabled'=>'Ενεργοποιημένη',
    'RiskPyramid'=>'Κίνδυνο Πυραμίδα',
    'RiskPyramidDescription'=>'Τον κίνδυνο πυραμίδα παραπάνω βοηθά να δείχνουν την κατανομή των κινδύνων μεταξύ των διαφόρων επιπέδων κινδύνου. Ένα τοπ βαρέων πυραμίδα μπορεί να είναι ένα σημάδι ότι ο οργανισμός σας λαμβάνει σε πολύ μεγάλο κίνδυνο.',
    'RiskAdvice'=>'Κίνδυνος Συμβουλές',
    'AddDeleteAssets'=>'Προσθήκη & Διαγραφή Περιουσιακών Στοιχείων',
    'EditAssets'=>'Επεξεργασία Στοιχείων Του Ενεργητικού',
    'AutomaticAssetValuation'=>'Αυτόματη Αποτίμηση Περιουσιακών Στοιχείων',
    'ManualAssetValuation'=>'Εγχειρίδιο Αποτίμηση Περιουσιακών Στοιχείων',
    'MinimumValue'=>'Ελάχιστη Τιμή',
    'MaximumValue'=>'Μέγιστη Τιμή',
    'ValueRange'=>'Το Εύρος Τιμής',
    'DefaultAssetValuation'=>'Προεπιλογή Αποτίμηση Περιουσιακών Στοιχείων',
    'Default'=>'Προεπιλογή',
    'RisksAndAssets'=>'Κινδύνους και τα Περιουσιακά στοιχεία',
    'Report'=>'Έκθεση',
    'RisksByAsset'=>'Κίνδυνοι από το Περιουσιακό στοιχείο',
    'AssetsByRisk'=>'Περιουσιακά στοιχεία με Κίνδυνο',
    'MaximumQuantitativeLoss'=>'Μέγιστη Ποσοτική Απώλεια',
    'MitigationOwner'=>'Άμβλυνσης Του Ιδιοκτήτη',
    'MitigationCost'=>'Περιορισμού Του Κόστους',
    'RiskColumns'=>'Κίνδυνος Στήλες',
    'MitigationColumns'=>'Μετριασμού Στήλες',
    'ReviewColumns'=>'Αναθεώρηση Στήλες',
    'ChangeStatus'=>'Αλλαγή Κατάστασης',
    'SetRiskStatusTo'=>'Ορισμός Κατάστασης Κινδύνου Να',
    'AddNewStatusNamed'=>'Προσθέστε νέα κατάσταση που ονομάζεται',
    'DeleteStatusNamed'=>'Διαγραφή κατάσταση που ονομάζεται',
    'DefaultCurrencySymbol'=>'Προεπιλεγμένο Σύμβολο Νομισματικής Μονάδας',
    'DefaultValues'=>'Προεπιλεγμένες Τιμές',
    'RiskSource'=>'Κινδύνου Πηγή',
    'AddNewSourceNamed'=>'Προσθέστε νέα πηγή με το όνομα',
    'DeleteSourceNamed'=>'Διαγραφή πηγή με το όνομα',
    'CheckAllAssessments'=>'Ελέγξτε Όλες Τις Αξιολογήσεις',
    'AllowAccessToAssessmentsMenu'=>'Επιτρέπουν την Πρόσβαση σε "Εκτιμήσεις" Μενού',
    'Assessments'=>'Αξιολογήσεων',
    'AvailableAssessments'=>'Διαθέσιμο Αξιολογήσεων',
    'PendingRisks'=>'Εν Αναμονή Των Κινδύνων',
    'CreateAssessment'=>'Δημιουργήστε Αξιολόγηση',
    'EditAssessment'=>'Edit Αξιολόγηση',
    'Overview'=>'Επισκόπηση',
    'OpenVsClosed'=>'Open vs Closed',
    'MitigatedVsUnmitigated'=>'Μετριαστεί vs Ολοκληρωτική',
    'ReviewedVsUnreviewed'=>'Αξιολόγηση vs Unreviewed',
    'OpenedRisks'=>'Άνοιξε Κινδύνους',
    'MailSettings'=>'Ρυθμίσεις Αλληλογραφίας',
    'TransportAgent'=>'Πρακτορείο Μεταφορών',
    'FromName'=>'Από Το Όνομα',
    'FromEmail'=>'Από E-Mail',
    'ReplyToName'=>'ReplyTo Όνομα',
    'ReplyToEmail'=>'ReplyTo Email',
    'Host'=>'Υποδοχής',
    'SMTPAuthentication'=>'SMTP Authentication',
    'Encryption'=>'Κρυπτογράφηση',
    'Port'=>'Λιμάνι',
    'Next'=>'Την επόμενη',
    'NewAssessmentQuestion'=>'Νέα Αξιολόγηση Ερώτηση',
    'Question'=>'Ερώτηση',
    'RiskScore'=>'Σκορ Κινδύνου',
    'SubmitRisk'=>'Υποβάλουν Κινδύνου',
    'Answer'=>'Απάντηση',
    'AddQuestion'=>'Προσθέστε Ερώτηση',
    'SaveAssessment'=>'Εξοικονομήστε Αξιολόγηση',
    'SendAssessment'=>'Στείλτε Αξιολόγηση',
    'DeleteAssessment'=>'Διαγραφή Αξιολόγηση',
    'AssessmentName'=>'Αξιολόγηση Το Όνομα',
    'SendTo'=>'Για Να Στείλετε',
    'ActiveAssessments'=>'Ενεργό Αξιολογήσεων',
    'SentTo'=>'Έστειλε Να',
    'From'=>'Από',
    'Key'=>'Κλειδί',
    ''=>'',
);

?>
