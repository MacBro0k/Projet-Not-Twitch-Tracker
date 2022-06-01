const express = require('express');
const router = express.Router();
const streamers = require('../services/streamers');

/* GET all streamers. */
router.get('/', async function(req, res, next) {
  try {
    res.json(await streamers.getAllStreamers(req.query.page));
  } catch (err) {
    console.error(`Error while getting programming languages `, err.message);
    next(err);
  }
})

/* Get one streamer. */
router.get('/:name', async function(req, res, next) {
  try {
    res.json(await streamers.getStreamer(req.params.name));
  } catch (err) {
    console.error(`Error while getting programming languages `, err.message);
    next(err);
  }
})

/* Get one streamer's stats */
router.get('/stats/:name', async function(req, res, next) {
  try {
    //res.json({ message: req.params.name});
    res.json(await streamers.getStreamerStats(req.params.name));
  } catch(err) {
    console.error(`Error while getting programming languages `, err.message);
    next(err);
  }
})

module.exports = router;