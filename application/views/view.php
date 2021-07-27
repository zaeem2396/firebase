<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
        <th>age</th>
        <th>first name</th>
        <th>action</th>
        </tr>
        <?php foreach($getFirebaseData as $data): ?>
        <tr>
            <td><?= $data->data()['age'] ?></td>
            <td><?= $data->data()['fname'] ?></td>
            <td><button type="button" onclick="deleteData(this)" data-id="<?= $data->id() ?>">delete</button></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    async function deleteData (e) {
        let id = e.getAttribute("data-id");
        const params = new URLSearchParams()
        params.append("id", id)
        const response = await axios.post("<?= base_url("Firebase/deleteData") ?>", params)
        let data = response.data
        console.log(data);
    }
</script>
</html>