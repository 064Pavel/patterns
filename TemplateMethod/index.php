<?php
abstract class Report {
    public function generateReport() {
        $this->formatHeader();
        $this->formatBody();
        $this->formatFooter();
    }

    abstract protected function formatHeader();
    abstract protected function formatBody();
    abstract protected function formatFooter();
}

class PDFReport extends Report {
    protected function formatHeader() {
        echo "PDF Header\n";
    }

    protected function formatBody() {
        echo "PDF Body\n";
    }

    protected function formatFooter() {
        echo "PDF Footer\n";
    }
}

class HTMLReport extends Report {
    protected function formatHeader() {
        echo "HTML Header\n";
    }

    protected function formatBody() {
        echo "HTML Body\n";
    }

    protected function formatFooter() {
        echo "HTML Footer\n";
    }
}

$pdfReport = new PDFReport();
$pdfReport->generateReport();

echo "\n";

$htmlReport = new HTMLReport();
$htmlReport->generateReport();