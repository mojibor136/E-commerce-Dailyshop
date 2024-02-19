<!-- resources/views/your-view.blade.php ফাইলে -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Limited Texts and Images</title>
</head>

<body>

    <!-- Create a container to display the result -->
    <div id="result-container"></div>

    <script>
        // Fetch data from Laravel API
        fetch('/get-data')
            .then(response => response.json())
            .then(data => {
                let resultContainer = document.getElementById('result-container');

                data.forEach(item => {
                    // Create a div for each item
                    let itemDiv = document.createElement('div');

                    // Split and join the text to get the limited words
                    let limitedText = item.category_name.split(' ').slice(0, 1).join(' ');

                    // Display limited CategoryNmae
                    let categoryNmaeParagraph = document.createElement('p');
                    categoryNmaeParagraph.textContent = 'CategoryNmae: ' + limitedText;
                    itemDiv.appendChild(categoryNmaeParagraph);

                    // Display Image
                    let imageElement = document.createElement('img');
                    imageElement.src = 'storage/' + item.category_img; // Replace with your actual image path
                    imageElement.alt = 'Image';
                    itemDiv.appendChild(imageElement);

                    // Append the item div to the result container
                    resultContainer.appendChild(itemDiv);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>

</body>

</html>
