<?php
    class Request
    {
        private $ReqId;
        private $RequesterId;
        private $Created_at;
        private $ReqType;
        public function setRequesterId($RID)
        {
            $this->RequesterId=$RID;
        }
        public function setReqType($RT)
        {
            $this->ReqType=$RT;
        }
        public function setTime($T)
        {
            $this->Created_at=$T;
        }
        public function getReqType()
        {
            return $this->ReqType;
        }
        public function getRequesterId()
        {
            return $this->RequesterId;
        }
        public function getTime()
        {
            return $this->Created_at;
        }
    }
?>