function generatePDF() {
    const element = document.getElementById("invoice");
    var opt = {
        margin: [0, 0, 0, 0],
        filename: 'otchet.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 1, width: 1550 },
        jsPDF: { unit: 'in', format: 'a3', orientation: 'landscape' }
    };
    html2pdf().from(element).set(opt).save();
}