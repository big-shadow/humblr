#!/bin/bash

grep -rlI $'\xEF\xBB\xBF' ..

fixBom() {
   echo "Fixing..."
   find . -type f -exec sed '1s/^\xEF\xBB\xBF//' -i {} \;
   echo "Done!"
}

echo -e "Fix the above files?"
select YN in "Yes" "No"; do
    case $YN in
        Yes ) fixBom; break;;
        No ) break;;
    esac
done