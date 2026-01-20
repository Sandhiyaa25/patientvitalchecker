Features

Validates patient vital values (Temperature, Pulse, BP)

Uses one higher-order function to apply different validation rules

Applies callback functions for each clinical rule

Implements a recursive file scanner to list project files

Clean and readable output


How It Works


Patient vital data is stored in vitals.php using associative arrays.

validate.php contains a higher-order function that accepts patient data and a rule function.

rules.php contains callback functions to validate Temperature, Pulse, and BP.

index.php controls the flow, applies validation rules, and prints results.

scanner.php recursively scans and lists all project files.

Output:  <img width="1366" height="725" alt="output" src="https://github.com/user-attachments/assets/ab554ba2-3065-4fb9-a6ca-5e34a00a0bd7" />
