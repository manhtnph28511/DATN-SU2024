// Trong categories.js

// Hàm Fetch API để lấy danh sách categories
function fetchCategories() {
    fetch('http://datn-su2024.test/api/categories')
        .then(response => response.json())
        .then(data => {
            // Xử lý dữ liệu trả về
            console.log(data);
        })
        .catch(error => {
            // Xử lý lỗi nếu có
            console.error('Error fetching categories:', error);
        });
}

export { fetchCategories };
