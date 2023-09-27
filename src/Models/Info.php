<?php
namespace TikScraper\Models;
use TikScraper\Constants\Responses;

class Info extends Base {
    public Meta $meta;
    public object $detail;
    public object $stats;

    public function setMeta(Response $req) {
        $this->meta = new Meta($req);
    }

    public function setDetail(object $detail) {
        $this->detail = $detail;
    }

    public function setStats(object $stats) {
        $this->stats = $stats;
    }

    public function fromCache(object $cache) {
        $this->meta = new Meta(Responses::ok());
        if (isset($cache->meta->og)) {
            $this->meta->og = $cache->meta->og;
        }
        $this->setDetail($cache->detail);
        $this->setStats($cache->stats);
    }
}
