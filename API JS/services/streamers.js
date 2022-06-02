const db = require('./db');
const helper = require('../helper');
const config = require('../config');

async function getAllStreamers(page = 1){
  const offset = helper.getOffset(page, config.listPerPage);
  const rows = await db.query(
    `SELECT id AS streamer_id, name AS streamer_name FROM streamers`
  );
  const data = helper.emptyOrRows(rows);
  const meta = {page};

  return {
    data,
    meta
  }
}

async function getStreamer(search_name){
  const rows = await db.query(
    `SELECT id AS streamer_id, name AS streamer_name FROM streamers WHERE name = "${search_name}"`
  );
  const data = helper.emptyOrRows(rows);

  return {data}
}

async function getStreamerStats(search_name){
  const rows = await db.query(
    `SELECT date, minutes_streamed, rank, avg_viewers, max_viewers, hours_watched, followers, views, followers_total, views_total FROM stats INNER JOIN streamers ON stats.streamer = streamers.id WHERE streamers.name = "${search_name}"`
  );
  const data = helper.emptyOrRows(rows);

  return {data}
}

module.exports = {
  getAllStreamers,
  getStreamer,
  getStreamerStats,
}