-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 03, 2024 lúc 10:09 PM
-- Phiên bản máy phục vụ: 10.3.39-MariaDB-cll-lve
-- Phiên bản PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chinhapi_test1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ds_bank`
--

CREATE TABLE `ds_bank` (
  `id` int(11) NOT NULL,
  `type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `taikhoan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `qr_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `min` int(11) NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `ds_bank`
--

INSERT INTO `ds_bank` (`id`, `type`, `taikhoan`, `name`, `qr_code`, `min`, `noidung`, `status`) VALUES
(23, 'Mb Bank', '9704229205160442255', 'NGUYEN THI HOANG VAN', 'MB', 10000, 'Sai nội dung trừ 20% giá trị', 'ON'),
(24, 'MBbank (auto)', '229629945555', 'Nguyễn Trung Chính', '', 10000, 'Chính dz vcl', 'ON');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_nap_bank`
--

CREATE TABLE `history_nap_bank` (
  `id` int(11) NOT NULL,
  `trans_id` text DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `type` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `stk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ctk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `thucnhan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `history_nap_bank`
--

INSERT INTO `history_nap_bank` (`id`, `trans_id`, `username`, `type`, `stk`, `ctk`, `thucnhan`, `status`, `time`) VALUES
(12, 'WZS5850535281', 'chinhapi', 'Hệ thống', 'Null', 'Admin cộng tiền', '10000', 'hoantat', '1711379588');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history_nap_the`
--

CREATE TABLE `history_nap_the` (
  `id` int(11) NOT NULL,
  `code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `seri` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `pin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `loaithe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `menhgia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `thucnhan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `history_nap_the`
--

INSERT INTO `history_nap_the` (`id`, `code`, `seri`, `pin`, `loaithe`, `menhgia`, `thucnhan`, `username`, `status`, `note`, `time`) VALUES
(17, 'lckyxnS2dPQK', '10010077443618', '817617614738991', 'VIETTEL', '10000', '7590', 'chinhapi', 'xuly', 'Gửi Thẻ Thành Công , Vui Lòng Chờ Duyệt', '06:45 15-03-2024'),
(18, 'yo41j7JVQXxG', '10010335237188', '112343798687014', 'VIETTEL', '10000', '7590', 'khang1btre', 'thatbai', 'Gửi Thẻ Thành Công , Vui Lòng Chờ Duyệt', '01:41 16-03-2024'),
(19, 'tnovICeRTwsZ', '10010335237188', '112343998687014', 'VIETTEL', '10000', '7550', 'khang1btre', 'thatbai', 'Gửi Thẻ Thành Công , Vui Lòng Chờ Duyệt', '01:52 16-03-2024'),
(20, 'I5Goatfy2zkc', '10010335237188', '112343998687014', 'VIETTEL', '10000', '7250', 'khang1btre', 'thatbai', 'PENDING', '01:56 16-03-2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lich_su_mua_host`
--

CREATE TABLE `lich_su_mua_host` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `domain` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `goi_host` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `server_host` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gia_host` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tk_host` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `mk_host` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngay_mua` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ngay_het` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `lich_su_mua_host`
--

INSERT INTO `lich_su_mua_host` (`id`, `username`, `domain`, `email`, `goi_host`, `server_host`, `gia_host`, `tk_host`, `mk_host`, `ngay_mua`, `ngay_het`, `status`, `note`, `time`) VALUES
(135, 'kjjkzr', 'pather.websitep', '', 'chinhap1_FREE1', '13', '0', 'cpatherwebsitepu', 'C@1WlQW9gJKeyR', '1705296127', '1715664127', 'hoatdong', 'hoatdong', '1705296127'),
(83, 'nguyenthanhkhai', 'nguyen.click', '', 'chinhap1_vn2', '13', '5000', 'cnguyenclicki', 'API@6sy4m5bJxhWJ', '1700455567', '1716007567', 'hoatdong', 'hoatdong', '1700455567'),
(128, 'thanhphuc15', 'thanhphuc.blog', '', 'chinhap1_FREE1', '13', '0', 'cthanhphucblogh', 'C@hlWsJqgzFR3k', '1705210010', '1712986010', 'hoatdong', 'hoatdong', '1705210010'),
(122, 'Trung1507', 'demoo.ddns.net', '', 'chinhap1_FREE1', '13', '0', 'cdemooddnsnetc', 'C@W2uyFRJoi5CC', '1705061193', '1728389193', 'hoatdong', 'hoatdong', '1705061193'),
(123, 'Trung1507', 'trung05.ddns.net', '', 'chinhap1_FREE1', '13', '0', 'ctrung05ddnsnetq', 'C@WxEwc4JWlCS7', '1705065300', '1715433300', 'hoatdong', 'hoatdong', '1705065300'),
(125, 'nguyenminhhieune', 'minhhieu.net', '', 'chinhap1_FREE1', '13', '1', 'cminhhieuneth', 'C@WxRpFzNC629i', '1705139628', '1715507628', 'OFF', 'hoatdong', '1705139628'),
(127, 'quangsang12', 'nqs.bhgdv.com', '', 'chinhap1_FREE1', '13', '1', 'cnqsbhgdvcomi', 'C@FW4Eb15kteQf', '1705196127', '1733708127', 'hoatdong', 'hoatdong', '1705196127'),
(129, 'thanhphuc15', 'thanhphuc.xyz', '', 'chinhap1_FREE1', '13', '0', 'cthanhphucxyzx', 'C@leRFgEyNf5CJ', '1705210072', '1718170072', 'hoatdong', 'hoatdong', '1705210072'),
(293, 'Manhnguyen59', 'dichvumang.shop', '', 'VNA1', '13', '6000', 'dichvumangshop', 'C@v2zQoOCr4gnB', '1710719846', '1713311846', 'hoatdong', 'hoatdong', '1710719846'),
(142, 'hoang2008', 'sub99x.giize.com', '', 'chinhap1_FREE1', '13', '0', 'csub99xgiizecomx', 'C@Iax3Kf7mWW6i', '1705322289', '1723466289', 'hoatdong', 'hoatdong', '1705322289'),
(143, 'doanvanquoc', 'vanquoc.id.vn', '', 'chinhap1_FREE1', '13', '0', 'cvanquocidvnf', 'C@HCaihdJpu2Rr', '1705326217', '1767534217', 'hoatdong', 'hoatdong', '1705326217'),
(144, 'Vuphong2232', 'phongapi.com', '', 'chinhap1_vn1', '13', '3000', 'cphongapicomy', 'C@WEyBKiCI9Wom', '1705344218', '1728672218', 'hoatdong', 'hoatdong', '1705344218'),
(149, 'Zero', 'seversubf13.vn', '', 'chinhap1_FREE1', '13', '0', 'cseversubf13vnb', 'C@oJpesyj0Rz7k', '1705402437', '1715770437', 'hoatdong', 'hoatdong', '1705402437'),
(148, 'Tloc123', 'Checkscamz.com', '', 'chinhap1_FREE1', '13', '0', 'ccheckscamzcomk', 'C@dWQHbkc3N9os', '1705392020', '1715760020', 'hoatdong', 'hoatdong', '1705392020'),
(156, 'vouyhan123', 'aaj.khach', '', 'chinhap1_FREE1', '13', '0', 'caajkhachu', 'C@wkiQecdKQJJx', '1705483725', '1721035725', 'hoatdong', 'hoatdong', '1705483725'),
(326, 'khang1btre', 'manguon211.shop', '', 'FREE', '19', '0', 'manguon211shop', 'C@0pjn256zefyE', '1711351252', '1713943252', 'hoatdong', 'hoatdong', '1711351252'),
(327, 'tungtran162000', 'tranthanhtung.cc', '', 'FREE', '19', '0', 'tranthanhtungcc', 'C@IKW80H7ECe2R', '1711389031', '1713981031', 'hoatdong', 'hoatdong', '1711389031'),
(168, 'dev', 'nam.giize.com', '', 'chinhap1_FREE1', '13', '0', 'cnamgiizecomz', 'C@0l9bE2zovqp7', '1705577761', '1715945761', 'hoatdong', 'hoatdong', '1705577761'),
(192, 'jjfkphong', 'dvcat.ddns.net', '', 'chinhap1_FREE1', '13', '0', 'cdvcatddnsnetv', 'C@lyJuo2gCiHz9', '1706176067', '1716544067', 'hoatdong', 'hoatdong', '1706176067'),
(284, 'chinhapi', 'spinre.site', '', 'vn1', '17', '5000', 'spinresite', 'C@ahWIWFH5xNWR', '1710521023', '1713113023', 'hoatdong', 'hoatdong', '1710521023'),
(291, 'liemdinh', 'chanle.fun', '', 'vn1', '17', '5000', 'chanlefun', 'C@fgcr5Qd3Itva', '1710644197', '1713236197', 'hoatdong', 'hoatdong', '1710644197'),
(292, 'ndkyeuntth', 'fakebillck.click', '', 'VNA1', '13', '6000', 'fakebillckclick', 'API@CkoR0b6q5hJW', '1710650011', '1713242011', 'hoatdong', 'hoatdong', '1710650011'),
(208, 'Quangdev', 'host2s.sytes.net', '', 'chinhap1_FREE1', '13', '0', 'chost2ssytesnete', 'C@0hHpJ3tJn8fW', '1706441823', '1711625823', 'hoatdong', 'hoatdong', '1706441823'),
(209, 'khoinguyen351', 'khoi.vn', '', 'chinhap1_FREE1', '13', '0', 'ckhoivnm', 'C@BpqSQnaFyJWE', '1706443614', '1742731614', 'hoatdong', 'hoatdong', '1706443614'),
(214, 'Quangdev', 're10s.sytes.net', '', 'chinhap1_FREE1', '13', '0', 'cre10ssytesnetb', 'C@q3F6j2hbJWn5', '1706520630', '1711704630', 'hoatdong', 'hoatdong', '1706520630'),
(215, 'Quangdev', 'dichvugiare.com', '', 'chinhap1_vn1', '13', '3000', 'cdichvugiarecoms', 'C@miof3BjC9KWb', '1706523922', '1711707922', 'hoatdong', 'hoatdong', '1706523922'),
(216, 'khoinguyen351', 'do.vn', '', 'chinhap1_FREE1', '13', '0', 'cdovnq', 'C@hQ9OKCtyqgWJ', '1706532400', '1716900400', 'hoatdong', 'hoatdong', '1706532400'),
(295, 'Loquyen213', 'quyenapi.sytes.net', '', 'VNA1', '13', '6000', 'quyenapisytesnet', 'C@Wo4EQbWknwdJ', '1710932207', '1713524207', 'hoatdong', 'hoatdong', '1710932207'),
(232, 'wuspico', 'cloud.wussun.me', '', 'chinhap1_vn2', '13', '8000', 'ccloudwussunmeh', 'C@ypzWRWkRQdWs', '1708079056', '1715855056', 'hoatdong', 'hoatdong', '1708079056'),
(330, 'hoangluan1210', 'dichvudev.site', '', 'FREE', '19', '0', 'dichvudevsite', 'C@3j7shWeJb1p9', '1711416367', '1729560367', 'hoatdong', 'hoatdong', '1711416367'),
(328, 'ndkyeuntth', 'khangmeo.site', '', 'FREE', '19', '0', 'khangmeosite', 'C@tnq138dIW2jx', '1711407588', '1713999588', 'hoatdong', 'hoatdong', '1711407588'),
(235, 'khang1btre', 'doicard24h.sto', '', 'chinhap1_vn1', '13', '3000', 'cdoicard24hstoe', 'C@8Reavsd7l6hi', '1708108842', '1710700842', 'dangtao', 'hoatdong', '1708108842'),
(237, 'dinh2006111', 'dichvuright.me', '', 'chinhap1_FREE1', '13', '0', 'cdichvurightmen', 'C@Wn3j0pfe1sOv', '1708139338', '1713323338', 'hoatdong', 'hoatdong', '1708139338'),
(296, 'admin', 'shopttno1.vn', '', 'VNA1', '13', '6000', 'shopttno1vn', 'API@oy3vWq5rKIJH', '1711011641', '1713603641', 'hoatdong', 'hoatdong', '1711011641'),
(325, 'lxtdev', 'subvip6s.site', '', 'FREE', '19', '0', 'subvip6ssite', 'C@5R6buKJreCz4', '1711350461', '1721718461', 'hoatdong', 'hoatdong', '1711350461'),
(324, 'dangquocvinh', 'đặngquốcvinh.vn', '', 'FREE', '19', '0', 'dangquocvinhvn', 'C@BzQqKEHftkJ2', '1711348857', '1713940857', 'hoatdong', 'hoatdong', '1711348857'),
(322, 'Huhu', 'hasaki.io.vn', '', 'VNA2', '13', '12000', 'hasakiiovn', 'C@sFfiJBuc6kqC', '1711345680', '1713937680', 'hoatdong', 'hoatdong', '1711345680'),
(329, 'devpro', 'namstore.shop', '', 'FREE', '19', '0', 'namstoreshop', 'C@INJJFR8zCR0i', '1711408452', '1721776452', 'hoatdong', 'hoatdong', '1711408452'),
(313, 'hatuankietbk', 'shopkiet.online', '', 'VNA3', '13', '30000', 'shopkietonline', 'C@cf2ouOmtJhpv', '1711303256', '1713895256', 'hoatdong', 'hoatdong', '1711303256'),
(277, 'levanthieu77', 'thucapi.com', '', 'svnkienitvn_vn1', '17', '5000', 'cthucapicom', 'C@tCBb8eE4hRiS', '1710244367', '1712836367', 'dangtao', 'hoatdong', '1710244367'),
(250, 'hoangluan1210', 'fake.vn', '', 'chinhap1_FREE1', '13', '1', 'cfakevny', 'C@e2CSRgaoiIJW', '1708768659', '1719136659', 'hoatdong', 'hoatdong', '1708768659'),
(251, 'Anhzea27', 'anhzea.link', '', 'chinhap1_vn1', '13', '3000', 'canhzealinkf', 'API@Jv0jzRCCWJiq', '1708775336', '1711367336', 'tamkhoa', 'hoatdong', '1708775336'),
(252, 'Khanhhuyy2', 'Lgarena.vn', '', 'chinhap1_vn1', '13', '3000', 'clgarenavn', 'C@zCpfj8eEWkQy', '1708785485', '1711377485', 'tamkhoa', 'hoatdong', '1708785485'),
(253, 'administrator', 'tinywood.vn', '', 'chinhap1_FREE1', '13', '0', 'ctinywoodvn', 'C@H4tCWW1KJyfd', '1708788404', '1716564404', 'hoatdong', 'hoatdong', '1708788404'),
(254, 'Khanhhuyy2', 'khanhhuy.link', '', 'chinhap1_FREE1', '13', '1', 'ckhanhhuylink', 'C@Em6wWKRsofWy', '1708820538', '1711412538', 'tamkhoa', 'hoatdong', '1708820538'),
(255, 'hhhh', 'dddd.vinadds.com', '', 'chinhap1_FREE1', '13', '0', 'cddddvinaddscom', 'C@IRajrl9H26KJ', '1708850429', '1719218429', 'hoatdong', 'hoatdong', '1708850429'),
(256, 'dfd', 'khoinguyen.net', '', 'chinhap1_FREE1', '13', '0', 'ckhoinguyennet', 'C@jgHO1aWe72md', '1708851157', '1711443157', 'hoatdong', 'hoatdong', '1708851157'),
(257, 'liemdinh', 'ddns.net', '', 'chinhap1_FREE1', '13', '0', 'cddnsnet', 'C@l9i8xmej2yWB', '1708875798', '1711467798', 'hoatdong', 'hoatdong', '1708875798'),
(258, 'hoangluan1210', 'dichvufbvn.site', '', 'chinhap1_FREE1', '13', '1', 'cdichvufbvnsite', 'C@clB3yfQOEi0Q', '1708911341', '1711503341', 'hoatdong', 'hoatdong', '1708911341'),
(259, 'hoangluan1210', 'banhack.vn', '', 'chinhap1_FREE1', '13', '1', 'cbanhackvn', 'C@H1WKWB6S34IE', '1708912036', '1727056036', 'hoatdong', 'hoatdong', '1708912036'),
(260, 'hoangnam2009', 'nickgame.online', '', 'chinhap1_FREE1', '13', '0', 'cnickgameonline', 'C@haORtRkWjpnB', '1708938250', '1711530250', 'hoatdong', 'hoatdong', '1708938250'),
(261, 'admin0911', 'dichvufb.zzux.com', '', 'chinhap1_FREE1', '13', '0', 'cdichvufbzzuxcom', 'C@hv97S4kJ6QBf', '1708945251', '1711537251', 'hoatdong', 'hoatdong', '1708945251'),
(263, 'ngthanhhaudz', 'gdv.changeip.biz', '', 'chinhap1_FREE1', '13', '0', 'cgdvchangeipbiz', 'C@0iKtQrzFoWSa', '1709009526', '1719377526', 'hoatdong', 'hoatdong', '1709009526'),
(265, 'ngthanhhaucuti', 'toscam.onmypc.biz', '', 'chinhap1_FREE1', '13', '0', 'ctoscamonmypcbiz', 'C@z9cjtaB3Idqx', '1709031143', '1727175143', 'hoatdong', 'hoatdong', '1709031143'),
(267, 'checkscam', 'dichvucode.click', '', 'chinhap1_FREE1', '13', '0', 'cdichvucodeclick', 'C@25RJIcWek3mO', '1709114617', '1711706617', 'hoatdong', 'hoatdong', '1709114617'),
(268, 'khoirrr242', 'kjgkjdh.online', '', 'chinhap1_FREE1', '13', '0', 'ckjgkjdhonline', 'C@fQlOuHdSW603', '1709127471', '1719495471', 'dangtao', 'hoatdong', '1709127471'),
(269, 'khoirrr242', 'rrrrrr.me', '', 'chinhap1_FREE1', '13', '0', 'crrrrrrme', 'C@sOqJWkiJE0Hm', '1709127951', '1711719951', 'hoatdong', 'hoatdong', '1709127951'),
(270, 'hoangluan1210', 'doithecao.vn', '', 'chinhap1_FREE1', '13', '1', 'cdoithecaovn', 'C@SuHJWBkgj0Wp', '1709137104', '1711729104', 'hoatdong', 'hoatdong', '1709137104'),
(271, 'Adminducanhdev11', 'Chinhapi.com', '', 'chinhap1_FREE1', '13', '0', 'cchinhapicom', 'C@QCId5hWzHOlp', '1709214783', '1732542783', 'dangtao', 'hoatdong', '1709214783'),
(273, 'Adminducanhdev11', 'ducanhdev.com', '', 'svnkienitvn_vn1', '17', '5000', 'cducanhdevcom', 'C@N6kIrW5n7CKR', '1709832263', '1712424263', 'hoatdong', 'hoatdong', '1709832263'),
(274, 'Adminducanhdev11', 'ducanhdev.net', '', 'svnkienitvn_vn1', '17', '5000', 'cducanhdevnet', 'C@viCzKuaolRSH', '1709889436', '1712481436', 'hoatdong', 'hoatdong', '1709889436');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_host`
--

CREATE TABLE `list_host` (
  `id` int(11) NOT NULL,
  `name_host` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title_host` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `server_host` int(11) NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'ON',
  `gia_host` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `dung_luong` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `mien_khac` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `bi_danh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `list_host`
--

INSERT INTO `list_host` (`id`, `name_host`, `title_host`, `server_host`, `code`, `status`, `gia_host`, `dung_luong`, `mien_khac`, `bi_danh`) VALUES
(21, 'VN01', 'Start Up', 11, 'VN01', 'ON', '5000', '500Mb', 'Không giới hạn', 'Không giới hạn'),
(22, 'FREE', 'Start Up', 18, 'FREE', 'ON', '0', '500Mb', '1 tên miền', '1 tên miền');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_server_host`
--

CREATE TABLE `list_server_host` (
  `id` int(11) NOT NULL,
  `name_server` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `link_login` varchar(100) NOT NULL,
  `tk_whm` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `mk_whm` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ip_whm` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ns1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ns2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `list_server_host`
--

INSERT INTO `list_server_host` (`id`, `name_server`, `link_login`, `tk_whm`, `mk_whm`, `ip_whm`, `ns1`, `ns2`, `status`, `time`) VALUES
(18, 'Host Free', 'https://free.chinhapi.asia', 'freechinhapi', '17}FYlt^xgjk', '14.225.206.85', 'ns1.14-225-206-85.cprapid.com', 'ns2.14-225-206-85.cprapid.com', 'ON', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `ten_web` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `logo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `favicon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `banner` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `key_words` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `banquyen` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `name_ad` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `fb_admin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sdt_admin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `telegram_admin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `cuphap` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `chiet_khau_card` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `token_momo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `token_mb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `baotri` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `smtp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'smtp.gmail.com',
  `port_smtp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '587',
  `email_auto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pass_mail_auto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `partner_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `partner_key` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `data_sitekey` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `data_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email_cf` text DEFAULT NULL,
  `api_cf` text DEFAULT NULL,
  `gach_the` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thongbao` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `token_tele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `id_tele` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `ten_web`, `logo`, `favicon`, `banner`, `key_words`, `description`, `mo_ta`, `banquyen`, `name_ad`, `fb_admin`, `sdt_admin`, `telegram_admin`, `cuphap`, `chiet_khau_card`, `token_momo`, `token_mb`, `baotri`, `smtp`, `port_smtp`, `email_auto`, `pass_mail_auto`, `partner_id`, `partner_key`, `data_sitekey`, `data_secret`, `email_cf`, `api_cf`, `gach_the`, `thongbao`, `token_tele`, `id_tele`) VALUES
(1, 'ChinhApi ', '', '', '', '', '', '', 'Bản Quyên @chinhapi 2024', 'CEO Nguyễn Trung Chính', 'https://www.facebook.com/chinhapiit', '0388674883', '@chinhapiit', 'NAPTIEN ', '13', '', '', 'OFF', 'smtp.gmail.com', '587', 'chinhapiit@gmail.com', 'jkifwvvfbpwusvmo', '40909851555', '805f2af43217c12a587b09a39a8bd67f', '6LdJ1zIpAAAAAEtJMkFPJRqKk5ELy5Vjg-ZvPZSe', '6LdJ1zIpAAAAAGwlue8MQ6Ln4-p9TVzLMLvV9hUR', 'nguyenduykhang1btre@gmail.com', 'd786556f229789cf7b2295b772704a80f9d65', 'trumcardre.com', '<p style=\"text-align: center; \"><br></p>', '6460800461:AAGAk6-TvV1cnE3-Swoywa1vFBiImeCehgw', '-1001922497255');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `sophone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `level` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `tong_nap` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `money` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `bannd` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `session` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `otpcode` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `email`, `sophone`, `level`, `tong_nap`, `money`, `bannd`, `session`, `time`, `ip`, `otpcode`) VALUES
(52, 'Nguyễn Trung Chính', 'chinhapiit', '10e4eafc65fdcc81621f587b6da117ad47a3d351', 'chinhapiit@gmail.com', '0388674883', '9', '50000', '50000', '0', 'ls8Jvp9euat1Hkq3FxgbCr0JQhycomNd', '08:30 26-03-2024', '118.71.137.222', ''),
(53, 'Nguyeen Chinh', 'chinh2206', '10e4eafc65fdcc81621f587b6da117ad47a3d351', 'chinhnt.k4@gmail.com', NULL, '9', '0', '0', '0', 'OIpndFu3hf6j84Qr5ceJCK1EWboQCgxH', '03:51 29-03-2024', '118.71.137.222', ''),
(54, 'Nguyen Dung', 'Dungtri', 'a9ee08a69a4b66235671f25f13e0d4e79304b3cd', 'nguyendung2004nb@gmail.com', '0378519357', '9', '0', '0', '0', 'cisqFCCzkWm2QoEdQng9Je0t67aBb5Rh', '04:44 29-03-2024', '171.237.169.233', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ds_bank`
--
ALTER TABLE `ds_bank`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_nap_bank`
--
ALTER TABLE `history_nap_bank`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `history_nap_the`
--
ALTER TABLE `history_nap_the`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lich_su_mua_host`
--
ALTER TABLE `lich_su_mua_host`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_host`
--
ALTER TABLE `list_host`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_server_host`
--
ALTER TABLE `list_server_host`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ds_bank`
--
ALTER TABLE `ds_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `history_nap_bank`
--
ALTER TABLE `history_nap_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `history_nap_the`
--
ALTER TABLE `history_nap_the`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `lich_su_mua_host`
--
ALTER TABLE `lich_su_mua_host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT cho bảng `list_host`
--
ALTER TABLE `list_host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `list_server_host`
--
ALTER TABLE `list_server_host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
