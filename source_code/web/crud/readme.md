#Company
php artisan crud:generate Company --fields_from_file="crud/company.json" --view-path=moderator --controller-namespace=Moderator --route-group=moderator

#Vacancy
php artisan crud:generate Vacancy --fields_from_file="crud/vacancy.json" --view-path=moderator --controller-namespace=Moderator --route-group=moderator

#Application
php artisan crud:generate Application --fields_from_file="crud/application.json" --view-path=moderator --controller-namespace=Moderator --route-group=moderator